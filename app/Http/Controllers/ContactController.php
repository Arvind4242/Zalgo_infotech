<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\ContactMail;


class ContactController extends Controller
{
public function send(Request $request)
{
    $formData = $request->validate([
        'name'    => 'required|string',
        'email'   => 'required|email',
        'phone'   => 'required|string',
        'budget'  => 'nullable|string',
        'service' => 'nullable|string',
        'message' => 'required|string',
        'additional_document' => 'nullable|file|max:10240', // 10MB
    ]);

    try {

        // Handle file upload (if exists)
        $filePath = null;

        if ($request->hasFile('additional_document')) {
            $filePath = $request->file('additional_document')
                                ->store('contact_files', 'public');
        }

        // Save to DB
        $mail = ContactMail::create([
            'name' => $formData['name'],
            'email' => $formData['email'],
            'phone' => $formData['phone'],
            'budget' => $formData['budget'] ?? null,
            'service' => $formData['service'] ?? null,
            'message' => $formData['message'],
            'additional_document' => $filePath,
            'sent_at' => now(),
        ]);

        // Add file path to mail data
        $formData['additional_document'] = $filePath;

        // Send Email
        Mail::to('sales@zalgoinfotech.com')
            ->send(new ContactFormMail($formData));

       return redirect()->route('thankyou.page')
        ->with('success', 'Message sent successfully!');

    } catch (\Exception $e) {

        return redirect()->back()
                ->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}

public function thankYou()
{
    return view('frontend.pages.thankyou');

}

}
