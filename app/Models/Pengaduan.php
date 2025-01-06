<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $fillable = [
        'unit_kerja_id',
        'nama',
        'alamat',
        'no_telf',
        'deskripsi_pengaduan',
        'gambar',
    ];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }
}
