<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id(); // ID Evaluasi
            $table->unsignedBigInteger('applicant_id'); // ID Pendaftar
            $table->enum('status', ['pending', 'accepted', 'rejected']); // Status Penerimaan
            $table->timestamps(); // Created At, Updated At

            // Menambahkan Foreign Key ke Applicants
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
