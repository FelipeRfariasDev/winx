<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnviarOrcamentoCliente extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data=$data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: env('APP_NAME','WINX UNIVERSE - Software House'));
    }

    public function content(): Content
    {
        return new Content(markdown: 'mail.EnviarOrcamentoCliente');
    }
}
