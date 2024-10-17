<?php

namespace App\Imports;

use App\Models\Karyawan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KaryawanImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Karyawan([
            'nama' => $row['nama'],
            'nrp' => $row['nrp'],
            'divisi' => $row['divisi'],
            'dept' => $row['dept'],
            'email' => $row['email'],
        ]);
    }
}
