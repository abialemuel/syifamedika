<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserReserv extends Mailable
{
    use Queueable, SerializesModels;
    public $rjpoli;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($rjpoli)
    {
        //
        $this->rjpoli = $rjpoli;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('mail.UserReserv')
                  ->subject('Reservasi Pasien');
    }
}
