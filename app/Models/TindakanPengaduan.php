<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TindakanPengaduan extends Model
{
    use HasFactory;

    protected $table = 'tindakan_pengaduan';

    protected $fillable = [
        'pengaduan_id',
        'deskripsi_tindakan',
        'waktu_tindakan',
        'status',
        'user_id',
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
