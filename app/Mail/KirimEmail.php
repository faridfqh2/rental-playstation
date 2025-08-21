<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KirimEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data_email;

    public function __construct($data_email)
    {
        $this->data_email = $data_email;
    }

    public function build()
    {
        return $this->subject($this->data_email['subject'])
                    ->view('mail.kontak') // Blade email
                    ->with('data', $this->data_email);
    }
}
