<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReserveMail extends Mailable
{
    use Queueable, SerializesModels;
    public $reserve;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reserve)
    {
        $this->reserve= $reserve;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // define our subject
        // $name = $this->reserve['last_name'].' '.$this->reserve['first_name'];
        $subject='New Room Reservation Enquiry';

        return $this
        ->markdown('emails.reserveRoomMail')
        ->subject($subject)
        ->with(['reserve'=>$this->reserve]);
    }
}
