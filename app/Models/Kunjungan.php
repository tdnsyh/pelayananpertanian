<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';

    protected $fillable = [
        'unit_kerja_id',
        'nama',
        'alamat',
        'no_telf_aktif',
        'keperluan',
    ];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }
}
