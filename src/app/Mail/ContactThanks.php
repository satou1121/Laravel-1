<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactThanks extends Mailable
{
    use Queueable, SerializesModels;

    private $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->request['mailaddress'])->markdown('emails.contact.thanks', [
            'name' => $this->request['name'] ,
            'name_kana' => $this->request['name_kana'] ,
            'mailaddress' => $this->request['mailaddress'] ,
            'phonenumber' => $this->request['phonenumber'] ,
            'inquiry' => $this->request['inquiry'] ,
        ]);
    }
}
