<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengawasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengawasans', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan');
            $table->string('pelaksana_pekerjaan');
            $table->string('no_kontrak');
            $table->date('tanggal_pekerjaan');
            $table->string('lokasi_pekerjaan');
            $table->string('pengawas_pln');
            $table->string('pengawas_vendor');
            $table->integer('jml_petugas_pelaksana');
            $table->boolean('sop');
            $table->boolean('IBPR');
            $table->string('JSA');
            $table->string('working_permit');
            $table->boolean('arahan_pekerja');
            $table->boolean('cek_komunikasi');
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
        Schema::dropIfExists('pengawasans');
    }
}
