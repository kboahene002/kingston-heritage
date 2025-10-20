<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCrytoCredentialsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $crypto_details;
    public $crypto_image;
    public function __construct( $crypto_details , $crypto_image)
    {
        $this->crypto_details = $crypto_details;
        $this->crypto_image = $crypto_image;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Cryto Credentials Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.crypto',
            with: [
                'address' => $this->crypto_details['address'],
                'amount'  => $this->crypto_details['amount'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
             Attachment::fromPath($this->crypto_image)
                      ->as('attached-image.jpg')
                      ->withMime('image/jpeg'),
        ];
    }
}
