<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamneses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Patient_id')->unsigned();
            $table->foreign('Patient_id')->references('id')->on('patients');
            $table->string('Keluhan');
            $table->string('Riwayat_Penyakit_Sekarang');
            $table->string('Riwayat_Pengobatan');
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
        Schema::dropIfExists('anamneses');
    }
}
