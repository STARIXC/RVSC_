<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    public $data;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // define our subject 
        $name= $this->data['name'];
        $subjectData= $this->data['subject'];
        $subject= 'Thank You '.$name.' For Contacting regarding '.$subjectData;
        
        return $this->markdown('emails.contactMail')
        ->subject($subject)
        ->with(['data'=>$this->data]);
    }
}