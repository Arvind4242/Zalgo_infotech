<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Http\Requests\StoreInquiryRequest;
use App\Mail\SendCommentMail;
use Auth;
use Illuminate\Support\Facades\Mail;

class InquiryController extends BaseController
{
    public function store(StoreInquiryRequest $inquiry)
    {
        // Retrieve validated data
        $data = $inquiry->validated();
       
        $companyMail = $data['company_mail'];

            Mail::to(Auth::user()->email)->cc('support@indian-apparel.com')->send(new SendCommentMail(
                $data['comment'],
                $data['contact'],
                $data['name'],
                $data['option'],
                $companyMail
            ));

            Mail::to($companyMail)
            ->send(new SendCommentMail(
                $data['comment'],
                $data['contact'],
                $data['name'],
                $data['option'],
                $companyMail
            ));
        

        return response()->json(['message' => 'Inquiry received and emails sent.'], 200);
    }
}
