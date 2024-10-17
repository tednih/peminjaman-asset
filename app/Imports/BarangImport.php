<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BarangImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Barang([
            'id_barang' => $row['id_barang'],
            'deskripsi' => $row['deskripsi'],
            'kategori' => $row['kategori'],
            'tersedia' => 1,
        ]);
    }
}
