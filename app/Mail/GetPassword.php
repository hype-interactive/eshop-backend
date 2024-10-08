<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct($password)
    {
        $this->user= $password;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->view('mail.get-password')
                    ->subject('eshop password ');
    }


}
