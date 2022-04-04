<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $phone
    ) {
        $this->name = $name;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')->with([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
    }
}
