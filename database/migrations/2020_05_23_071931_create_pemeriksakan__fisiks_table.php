<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksakanFisiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksakan__fisiks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Patient_id')->unsigned();
            $table->foreign('Patient_id')->references('id')->on('patients');
            $table->string('Mata');
            $table->string('THT');
            $table->string('Leher');
            $table->string('Torak_S/A');
            $table->string('Torak_Jantung');
            $table->string('Torak_Paru');
            $table->string('Abdomen');
            $table->string('Abdomen_Hepar');
            $table->string('Abdomen_Ren');
            $table->string('Abdomen_Lien');
            $table->string('Abdomen_Lainya');
            $table->string('Extremitas');
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
        Schema::dropIfExists('pemeriksakan__fisiks');
    }
}
