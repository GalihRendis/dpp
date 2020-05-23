<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmens', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('Patient_id')->unsigned();
            $table->foreign('Patient_id')->references('id')->on('patients');
             $table->unsignedBigInteger('Dokter_id')->unsigned();
            $table->foreign('Dokter_id')->references('id')->on('dokters');
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
        Schema::dropIfExists('asesmens');
    }
}
