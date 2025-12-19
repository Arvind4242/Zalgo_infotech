<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPassword extends Notification
{
    public $token;

    /**
     * Create a new notification instance.
     *
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // Generate a URL with masked email (only token and URL will be passed in the email)
        return (new MailMessage)
            ->subject('Reset Password')
            ->view('emails.reset_password', [
                // 'url' => env('RESET_PASSWORD_PAGE', 'https://directory.indian-apparel.com/reset-password') . 
                //         "?token={$this->token}&email=" . urlencode(base64_encode($notifiable->getEmailForPasswordReset())),

                'url' => $this->buildResetUrl($notifiable),
            ]);

            
    }
    private function buildResetUrl($notifiable)
     {
        return env('RESET_PASSWORD_PAGE', 'https://directory.indian-apparel.com/reset-password') .
               "?token={$this->token}&email=" . $notifiable->getEmailForPasswordReset();
    }
    

}
