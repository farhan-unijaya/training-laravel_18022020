<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Feedback;

class Sample extends Mailable
{
    use Queueable, SerializesModels;

    public $feedback;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Feedback $feedback)
    {
        //
        $this->feedback = $feedback;
        $this->subject = 'Maklumbalas Berjaya Dihantar - '.date('Y-m-d H:i:s');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.feedback')->subject($this->subject)->replyTo(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
    }
}
