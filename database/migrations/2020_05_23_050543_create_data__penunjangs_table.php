<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenunjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__penunjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Patient_id')->unsigned();
            $table->foreign('Patient_id')->references('id')->on('patients');
            $table->string('Penunjang_Lab');
            $table->string('Penunjang_EKG');
            $table->string('Penunjang_X_Ray');
            $table->string('Rencana_Kerja');
            $table->string('Diagnosis_Kerja');
            $table->string('Terapi');
            $table->time('Disposisi_Jam_Keluar');
            $table->date('Disposisi_Tanggal');
            $table->date('Disposisi_Kontrol');
            $table->string('Diagnosis_Rawat');
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
        Schema::dropIfExists('data__penunjangs');
    }
}
