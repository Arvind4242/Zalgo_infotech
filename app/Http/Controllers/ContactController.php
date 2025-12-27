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

    // Save to DB
    $mail = ContactMail::create([
        'name' => $formData['name'],
        'email' => $formData['email'],
        'phone' => $formData['phone'],
        'message' => $formData['message'],
        'sent_at' => now(),
    ]);

    // Send Mail
    Mail::to('arvindsinghsikarwar52@gmail.com')->send(new ContactFormMail($formData));

    return response()->json([
        'status' => 'ok',
        'db_id' => $mail->id,
        'message' => 'Mail sent and saved to database',
    ]);
}

}
