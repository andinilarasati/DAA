<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'status',
    ];

    // Relasi ke Applicants
    public function applicant()
    {
        return $this->belongsTo(Applicants::class);
    }
}
