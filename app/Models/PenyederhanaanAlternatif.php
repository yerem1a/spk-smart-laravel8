<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyederhanaanAlternatif extends Model
{
    use HasFactory;
    protected $table = 'penyederhanaan_alternatif'; // Sesuaikan dengan nama tabel yang benar di basis data Anda

    protected $fillable = [
        'alternatif',
        'nama',
        'alamat',
        'jumlah_tanggungan',
        'status',
        'pendidikan_terakhir',
        'penghasilan',
        'pengeluaran',
    ];
}
