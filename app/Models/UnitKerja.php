<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'unit_kerja';

    protected $fillable = [
        'nama_unit_kerja',
        'deskripsi_singkat',
        'jenis_pelayanan',
    ];

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class);
    }

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class);
    }

    public function pelayanan()
    {
        return $this->hasMany(Pelayanan::class);
    }

    public function pelayanans()
    {
        return $this->hasMany(Pelayanan::class);
    }
}
