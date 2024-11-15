<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'applicants';

    // Menentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'name',
        'email',
        'academic_background',
        'motivation',
    ];

    // Relasi ke tabel Evaluations (One-to-One)
    public function evaluation()
    {
        return $this->hasOne(Evaluations::class);
    }

    // Menggunakan relasi default untuk evaluasi jika belum ada
    public function getEvaluationStatusAttribute()
    {
        // Cek apakah ada evaluasi, jika ada, ambil status; jika tidak, status 'pending'
        return $this->evaluation ? $this->evaluation->status : 'pending';
    }
}
