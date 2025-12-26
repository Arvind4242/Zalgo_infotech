<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
   public function send(Request $request)
{
    $formData = $request->validate([
        'name'    => 'required|string',
        'email'   => 'required|email',
        'phone'   => 'required|string',
        'message' => 'required|string',
    ]);

    \Log::info('Mail sending triggered from form');

    Mail::to('arvindsinghsikarwar52@gmail.com')->send(new ContactFormMail($formData));

    return response()->json(['status' => 'ok', 'message' => 'Mail sent successfully']);
}

}
