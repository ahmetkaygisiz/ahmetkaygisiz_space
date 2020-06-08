<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $mail_content;

    public function __construct($mail_content)
    {
        $this->mail_content = $mail_content;
    }

    public function build()
    {
        return $this->subject('Mail from ahmetkaygisiz.space')
                    ->view('mail');
    }
}
