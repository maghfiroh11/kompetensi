<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nim', 'jurusan', 'tahun_masuk'];

    // Relasi ke kompetensi
    public function kompetensis()
    {
        return $this->hasMany(Kompetensi::class);
    }
}
