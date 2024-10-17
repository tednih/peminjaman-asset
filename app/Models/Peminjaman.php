<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id_peminjaman';
    public $timestamps = true;
    protected $fillable = [
        'id_barang',
        'id_karyawan',
        'nama',
        'nrp',
        'divisi',
        'email',
        'jenis_barang',
        'waktu_peminjaman',
        'waktu_pengembalian',
        'status',

    ];
}
