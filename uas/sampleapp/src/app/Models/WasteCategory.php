<?php
// database/migrations/xxxx_xx_xx_create_waste_categories_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWasteCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kategori sampah
            $table->integer('points'); // Poin yang diberikan untuk kategori sampah
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste_categories');
    }
}
