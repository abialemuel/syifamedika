<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegist extends Mailable
{
    use Queueable, SerializesModels;
    public $pasien;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pasien)
    {
        //
        $this->pasien = $pasien;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.UserRegist')
                    ->subject('Registrasi Pasien');
    }
}
