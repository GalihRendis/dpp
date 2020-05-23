<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAsesmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__asesmens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Patient_id')->unsigned();
            $table->unsignedBigInteger('Anamnesis_id')->unsigned();
            $table->unsignedBigInteger('Data_Penunjang_id')->unsigned();
            $table->unsignedBigInteger('Pemeriksakan_Fisik_id')->unsigned();
            $table->unsignedBigInteger('Dokter_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('data__asesmens', function (Blueprint $table) {
            $table->foreign('Patient_id')->references('id')->on('patients');
            $table->foreign('Anamnesis_id')->references('id')->on('anamneses');
            $table->foreign('Data_Penunjang_id')->references('id')->on('data__penunjangs');
            $table->foreign('Pemeriksakan_Fisik_id')->references('id')->on('pemeriksakan__fisiks');
            $table->foreign('Dokter_id')->references('id')->on('dokters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data__asesmens');
    }
}
