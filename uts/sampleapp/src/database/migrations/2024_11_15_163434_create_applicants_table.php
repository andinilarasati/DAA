<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id(); // ID Pendaftar
            $table->string('name'); // Nama Mahasiswa
            $table->string('email')->unique(); // Email Mahasiswa
            $table->text('academic_background'); // Latar Belakang Akademik
            $table->text('motivation'); // Motivasi Mengikuti Program
            $table->timestamps(); // Created At, Updated At
        });
    }

    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
