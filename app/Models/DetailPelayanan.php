<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPelayanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pelayanan';
    protected $fillable = [
        'pelayanan_id',
        'komponen',
        'uraian'
    ];

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class);
    }
}
