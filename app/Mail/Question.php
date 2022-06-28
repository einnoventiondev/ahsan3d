<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Question extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->from('einnoventiondev2@gmail.com',)
            ->subject('einnoventiondev')
            ->markdown('emails.question')
            ->with([
           'link' => 'http://127.0.0.1:8000/feedback',
				'details'=>$this->details,
            ]);
    }
}
