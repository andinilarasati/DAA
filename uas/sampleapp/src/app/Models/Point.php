<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = ['user_id', 'total_points'];

    /**
     * Mendefinisikan relasi antara Point dan User.
     * Setiap poin dimiliki oleh satu pengguna.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
