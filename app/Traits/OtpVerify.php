<?php

namespace App\Traits;

use App\Enums\ApiConstant;
use App\Enums\OtpVerify as OtpType;
use App\Enums\OtpVerifyModel;
use App\Mail\OtpMail;
use App\Models\OtpVerify as OTP;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

trait OtpVerify
{
    public function otp($contact, $model): JsonResponse
    {
        $sent = $this->generate_otp($contact, $model);

        return $this->otp_sent($sent, $contact);
    }

    public function generate_otp($value, $model = OtpVerifyModel::USER): bool|array
    {
        $otp = rand(1111, 9999);
        $sent = false;
        $type = OtpType::EMAIL;
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            Mail::to($value)->send(new OtpMail($otp));
            $sent = true;
        }
        if (preg_match('/^\+?[1-9]\d{1,14}$/', $value)) {
            // $sms = \Aws\Laravel\AwsFacade::createClient('sns');
            $type = OtpType::MOBILE;
            $message = "OTP is $otp to verify your number on Indian-Apparel.com. This OTP is valid for next 10 minutes. Do not share OTP for Security reasons.";
            $this->sendSMS($value, $message);

            // $sms->publish([
            //     'Message' => 'Your OTP is: '.$otp,
            //     'PhoneNumber' => $value,
            //     'MessageAttributes' => [
            //         'AWS.SNS.SMS.SMSType' => [
            //             'DataType' => 'String',
            //             'StringValue' => 'Transactional',
            //         ],
            //     ],
            // ]);

            $sent = true;
        }
        if ($sent) {
            return ['sent' => $sent, 'otp' => md5($otp), 'type' => $type, 'model' => $model];
        }

        return $sent;
    }

    public function otp_sent($sent, $contact): JsonResponse
    {
        if ($sent['sent']) {
            unset($sent['sent']);
            OTP::updateOrCreate(['contact' => $contact, 'model' => $sent['model']], $sent);

            return response()->json([
                'message' => 'OTP sent to your registered '.$sent['type'],
                'success' => true,
            ]);
        } else {

            return response()->json([
                'message' => 'OTP not sent, please try again later',
                'success' => false,
            ]);
        }
    }

    public function verify($otp, $contact, $model = OtpVerifyModel::USER)
    {
        $otp = OTP::where('is_verified', false)->where('otp', md5($otp))->where('model', $model)->where('contact', $contact)->first();
        if ($otp) {
            $otp->is_verified = true;
            $otp->update();
            $res = [
                'message' => ucfirst($otp->model).' '.ucfirst($otp->type).' verified successfully!',
                'success' => true,
            ];
            if ($model == OtpVerifyModel::USER) {
                $user = User::where('email', $contact)->orWhere('mobile', $contact)->first();
                if ($user) {
                    $user->tokens->each(function ($token) {
                        $token->revoke();
                    });
                    $res['token'] = $user->createToken(ApiConstant::Token)->accessToken;
                }
            }

            return response()->json($res);
        }

        return response()->json([
            'message' => 'Invalid OTP or Email/Mobile entred',
            'success' => false,
        ], 422);
    }

    public function sendSMS($to, $message)
    {
        $client = new Client;
        $apiUrl = env('BHASHSMS_API_URL');
        $apiKey = env('BHASHSMS_API_KEY');
        $apiSecret = env('BHASHSMS_API_SECRET');
        $apiSender = env('BHASHSMS_API_SENDER');

        $response = $client->post($apiUrl, [
            'query' => [
                'user' => $apiKey,
                'pass' => $apiSecret,
                'sender' => $apiSender,
                'phone' => $to,
                'text' => $message,
                'priority' => 'ndnd',
                'stype' => 'normal'],
        ]);

        return $response->getStatusCode();
    }
}
