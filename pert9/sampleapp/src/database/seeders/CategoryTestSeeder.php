<?php

// database/seeders/CategoryTestSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Pastikan sudah mengimpor model Category

class CategoryTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyisipkan data kategori ke dalam tabel categories
        Category::insert([
            ['name' => 'Sepatu'],
            ['name' => 'Celana'],
            ['name' => 'Baju'],
        ]);
    }
}
[]