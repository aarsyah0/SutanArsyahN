<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = 'riwayat_kerja';

    protected $fillable =['Nama','posisi_kerja','tempat_kerja','tahun_masuk','tahun_keluar','alasan_keluar'];
}
