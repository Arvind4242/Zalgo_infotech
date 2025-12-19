<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $news;
    public $sponsors;
    public $editorial;
    public $events;
    public $footer;

    public function __construct($content, $news, $sponsors, $editorial, $events, $footer)
    {
        $this->content = $content;
        $this->news = $news;
        $this->sponsors = $sponsors;
        $this->editorial = $editorial;
        $this->events = $events;
        $this->footer = $footer;
    }

    public function build()
    {
        return $this->subject('Weekly Newsletter')
            ->view('emails.newsletter')
            ->with([
                'content' => $this->content,
                'news' => $this->news,
                'sponsors' => $this->sponsors,
                'editorial' => $this->editorial,
                'events' => $this->events,
                'footer' => $this->footer,
            ]);
    }
}
