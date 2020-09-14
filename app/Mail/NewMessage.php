<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ClientMessage;

class NewMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $msg;

    public function __construct(ClientMessage $msg)
    {
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("Pesan baru dari ".$this->msg->name);
        $this->replyTo($this->msg->email);
        return $this->view('mail.newmessage')->with([
            'name' => $this->msg->name,
            'textBody' => $this->msg->message,
        ]);
    }
}
