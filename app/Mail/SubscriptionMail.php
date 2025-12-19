<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $type;

    public function __construct($user, $type)
    {
        $this->user = $user;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type === 'admin') {
            return $this->subject('New Subscription Alert')
                ->view('emails.subscription_admin')
                ->with(['user' => $this->user]);
        }
    
        return $this->subject('Subscription Confirmation')
            ->view('emails.subscription_user')
            ->with(['user' => $this->user]);
    }
    
}