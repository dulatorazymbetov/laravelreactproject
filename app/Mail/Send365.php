<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Send365 extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data) {
        $this->subject('Учетная запись для входа в портал онлайн обучения на платформе Microsoft Office Teams 365');
        $this->data = $data;
    }

    public function build() {
        return $this->view('email.send_365_login');
    }
}
