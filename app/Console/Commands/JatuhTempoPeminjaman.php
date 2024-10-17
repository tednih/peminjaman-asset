<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeadlineEmail;

class JatuhTempoPeminjaman extends Command
{
    protected $signature = 'peminjaman:check-overdue';

    protected $description = 'Check and notify overdue peminjaman';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get overdue peminjaman
        $overduePeminjaman = Peminjaman::where('status', 1) // Filter peminjaman yang masih aktif (status 1)
            ->whereDate('waktu_pengembalian', '<', now()) // Filter peminjaman yang sudah melewati jadwal pengembalian
            ->get();

        // Send email notification to each user with overdue peminjaman
        foreach ($overduePeminjaman as $peminjaman) {
            Mail::to($peminjaman->email)->send(new DeadlineEmail($peminjaman));
        }

        $this->info('Overdue peminjaman checked and notifications sent.');
    }
}
