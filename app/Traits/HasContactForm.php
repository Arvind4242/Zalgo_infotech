<?php

namespace App\Traits;

use App\Mail\ContactThankYouMail;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

trait HasContactForm
{
    public function store($request): Model|Contact
    {
        Mail::to($request->email)
    ->bcc('support@indian-apparel.com')
    ->send(new ContactThankYouMail($request->name, $request->email, $request->intrested, $request->phone));

    
        return Contact::create($request->toArray());
    }
    
}
