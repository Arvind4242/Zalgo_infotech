<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $mail = $this->subject('New Contact Form Submission')
                     ->view('emails.contact-form')
                     ->with('data', $this->data);

        // Attach file if exists
        if (!empty($this->data['additional_document'])) {

            $filePath = storage_path('app/public/' . $this->data['additional_document']);

            if (file_exists($filePath)) {
                $mail->attach($filePath);
            }
        }

        return $mail;
    }
}