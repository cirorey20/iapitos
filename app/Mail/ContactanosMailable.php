<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Info de contacto"; //ESTE ES EL ASUNTO QUE LE VA A LLEGAR

    public $contacto = "Esta es la informacion del contacto"; //$contacto va a ir al __constructor

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;//esta variable se va a utilizar en la vista que se va a mostrar en correo del admin
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dev209520@gmail.com', env('MAIL_FROM_NAME'))
                    ->view('Email.datos');
    }

}
