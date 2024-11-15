<?php

namespace Database\Seeders;

use App\Models\Evaluations;
use App\Models\Applicants;
use Illuminate\Database\Seeder;

class EvaluationsSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan status penerimaan untuk masing-masing pendaftar
        $applicant1 = Applicants::where('email', 'johndoe@example.com')->first();
        $applicant2 = Applicants::where('email', 'janesmith@example.com')->first();

        Evaluations::create([
            'applicant_id' => $applicant1->id,
            'status' => 'accepted',
        ]);

        Evaluations::create([
            'applicant_id' => $applicant2->id,
            'status' => 'rejected',
        ]);
    }
}
