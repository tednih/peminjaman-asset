<?php

namespace App\Exports;

// app/Exports/PeminjamanExport.php
use App\Models\Peminjaman;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;

class PeminjamanExport implements FromCollection
{
    public function collection()
    {
        $selectedMonth = request()->input('month');

        $query = Peminjaman::query();

        if (!empty($selectedMonth)) {
            $query->whereMonth('waktu_peminjaman', $selectedMonth);
        }

        return $query->get();
    }
}
