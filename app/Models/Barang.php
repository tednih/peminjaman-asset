<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tb_barang';
    protected $primaryKey = 'id';

    // Definisikan kolom yang dapat diisi
    protected $fillable = [
        'id_barang',
        'deskripsi',
        'kategori',
        'tersedia',
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_barang', 'id_barang');
    }

    // Jika tidak menggunakan timestamps, atur ke false
    public $timestamps = false;
}
