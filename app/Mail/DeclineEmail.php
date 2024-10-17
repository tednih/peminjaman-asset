<?php

namespace App\Mail;

use App\Models\Peminjaman;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DeclineEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $peminjaman;
    public function __construct(Peminjaman $peminjaman)
    {
        $this->peminjaman = $peminjaman;
    }
    public function build()
    {
        return $this->subject('Peminjaman Asset - Notifikasi')
            ->markdown('emails.decline')
            ->with('imagePath', public_path('images/logobp.png'))
            ->with('imagePath2', public_path('images/binapertiwi_logo.png'))
            ->with('nama', $this->peminjaman->nama)
            ->with('nrp', $this->peminjaman->nrp)
            ->with('divisi', $this->peminjaman->divisi)
            ->with('email', $this->peminjaman->email)
            ->with('jenis_barang', $this->peminjaman->jenis_barang)
            ->with('waktu_peminjaman', $this->peminjaman->waktu_peminjaman)
            ->with('waktu_pengembalian', $this->peminjaman->waktu_pengembalian);
    }
}
