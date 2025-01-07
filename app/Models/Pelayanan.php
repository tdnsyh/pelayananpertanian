<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;

    protected $table = 'pelayanan';
    protected $fillable = [
        'unit_kerja_id',
        'kategori_pelayanan'
    ];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }

    public function detailPelayanan()
    {
        return $this->hasMany(DetailPelayanan::class);
    }

    public function details()
    {
        return $this->hasMany(DetailPelayanan::class);
    }

    public function detailPelayanans()
    {
        return $this->hasMany(DetailPelayanan::class);
    }
}
