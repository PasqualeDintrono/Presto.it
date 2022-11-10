<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public function __construct($contact)
    {
        $this->contact= $contact;
    }




    public function build()
    {
       return $this->from("admin@42.it")->view("mail.contactmail");
    }
}
