<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendCommentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $comment;

    public $contact;

    public $name;

    public $option;

    public $replyToAddress;

    /**
     * Create a new message instance.
     */
    public function __construct($comment, $contact, $name, $option, $replyToAddress)
    {
        $this->comment = $comment;
        $this->contact = $contact;
        $this->name = $name;
        $this->option = $option;
        $this->replyToAddress = $replyToAddress;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Inquiry via Indian-Apparel.com - Quick Action Requested',
            replyTo: [$this->replyToAddress],
            
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.comment',
            with: [
                'comment' => $this->comment,
                'contact' => $this->contact,
                'name' => $this->name,
                'option' => $this->option,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
