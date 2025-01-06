<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    use HasFactory;

    protected $table = 'responden';

    protected $fillable = [
        'jenis_kelamin',
        'usia',
        'pendidikan',
        'pekerjaan',
    ];

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
