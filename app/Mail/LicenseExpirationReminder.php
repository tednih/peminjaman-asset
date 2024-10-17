<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\License;

class LicenseExpirationReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $license;
    public function __construct(License $license)
    {
        $this->license = $license;
    }
    public function build()
    {
        return $this->subject('License '.$this->license->nama_license.' - Notifikasi')
            ->markdown('emails.license')
            ->with('nama_license', $this->license->nama_license)
            ->with('tgl_expired', $this->license->tgl_expired);
    }
}

