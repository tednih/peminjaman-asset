<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'tb_karyawan';
    protected $primaryKey = 'id_karyawan';
    public $timestamps = false;

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['nama', 'nrp', 'divisi', 'dept', 'email'];

    // Relasi dengan tabel peminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_karyawan', 'id_karyawan');
    }
}
