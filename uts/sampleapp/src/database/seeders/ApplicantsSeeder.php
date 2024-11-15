<?php

namespace Database\Seeders;

use App\Models\Applicants;
use App\Models\Evaluations;
use Illuminate\Database\Seeder;

class ApplicantsSeeder extends Seeder
{
    public function run()
    {
        // Membuat beberapa data pendaftar
        $applicants = Applicants::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'academic_background' => 'S1 Teknik Informatika',
            'motivation' => 'Saya ingin belajar di luar negeri untuk memperluas wawasan akademik saya.',
        ]);

        // Menambahkan data evaluasi untuk pendaftar tersebut
        Evaluations::create([
            'applicant_id' => $applicants->id,
            'status' => 'pending',
        ]);

        // Anda bisa menambahkan pendaftar dan evaluasi lainnya jika diperlukan
    }
}
