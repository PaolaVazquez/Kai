<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CotizacionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $productos;

    public function __construct($data, $productos)
    {
        $this->data = $data;
        $this->productos = $productos;
    }

    public function build()
    {
        return $this
            ->subject('Nueva solicitud de cotización')
            ->view('emails.CotizacionMail');
    }
}
