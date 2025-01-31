<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reward extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi mass-assignment
    protected $fillable = ['name', 'points_required', 'stock'];

    /**
     * Relasi antara Reward dan Transaction.
     * Satu reward bisa digunakan dalam banyak transaksi.
     */
    public function transactions()
    {
        return $this->hasMany(Reward::class);
    }
}
