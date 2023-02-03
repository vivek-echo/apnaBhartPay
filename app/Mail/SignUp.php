<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignUp extends Mailable
{
    use Queueable, SerializesModels;
    protected $response;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($response)
    {
       $this->response = $response;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $res['name']=$this->response['firstName']." ".$this->response['lastName'];
        $res['otp']=$this->response[0]['otp'];
        return $this->view('Mail.signUp', $res);
    }
}
