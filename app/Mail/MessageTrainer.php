<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageTrainer extends Mailable
{
    use Queueable, SerializesModels;

    public $message_content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message_content)
    {
        $this->message_content = $message_content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('startup.emails.message_trainer');
    }
}
