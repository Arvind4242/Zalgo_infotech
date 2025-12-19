<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait BashSMSTrait
{
    protected function sendSMS($to, $message)
    {
        $client = new Client;
        $apiUrl = env('BHASHSMS_API_URL');
        $apiKey = env('BHASHSMS_API_KEY');
        $apiSecret = env('BHASHSMS_API_SECRET');
        $apiSender = env('BHASHSMS_API_SENDER');

        $response = $client->post($apiUrl, [
            'user' => $apiKey,
            'pass' => $apiSecret,
            'sender' => $apiSender,
            'phone' => $to,
            'text' => $message,
            'priority' => 'ndnd',
            'stype' => 'normal',
        ]);

        return $response->getBody()->getContents();
    }
}
