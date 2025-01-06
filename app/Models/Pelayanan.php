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
        'kategori',
        'komponen',
        'uraian',
    ];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }
}
