<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WasteReport extends Model
{
    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = ['user_id', 'waste_category_id', 'photo', 'location', 'status'];

    /**
     * Mendefinisikan relasi antara WasteReport dan User.
     * Setiap laporan sampah dimiliki oleh seorang pengguna.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mendefinisikan relasi antara WasteReport dan WasteCategory.
     * Setiap laporan sampah termasuk dalam satu kategori sampah.
     */
    public function wasteCategory()
    {
        return $this->belongsTo(WasteReport::class);
    }
}
