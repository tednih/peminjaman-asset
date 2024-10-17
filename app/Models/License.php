<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    protected $table = 'tb_license';
    protected $primaryKey = 'id_license';

    // Definisikan kolom yang dapat diisi
    protected $fillable = [
        'nama_license',
        'tgl_expired',
    ];

    public function license()
    {
        return $this->hasMany(License::class, 'id_license', 'id_license');
    }

    // Jika tidak menggunakan timestamps, atur ke false
    public $timestamps = false;
}
