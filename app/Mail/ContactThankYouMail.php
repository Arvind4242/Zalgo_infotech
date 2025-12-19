<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $intrested;
    public $remarks;

    /**
     * Initializes a new instance of the ContactThankYouMail class.
     *
     * @param string $name The name of the contact.
     * @param string $email The email address of the contact.
     * @param string $intrested The intrested from the contact.
     */
    public function __construct($name, $email, $intrested, $remarks)
    {
        $this->name = $name;
        $this->email = $email;
        $this->intrested = $intrested;
        $this->remarks = $remarks;
    }

    public function build()
    {
        return $this->subject('Thank You for Contacting Us!')
                    ->view('emails.contact_thank_you');
    }
}
