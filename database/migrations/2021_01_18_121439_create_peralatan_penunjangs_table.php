<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeralatanPenunjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralatan_penunjangs', function (Blueprint $table) {
            $table->id();
            $table->boolean('Grounding_Appartus_TR');
            $table->boolean('Grounding_Appartus_TM');
            $table->boolean('Voltage_Detector');
            $table->boolean('LOTO');
            $table->boolean('papan_peringatan');
            $table->boolean('traffic_cone');
            $table->boolean('p3k');
            $table->boolean('jas_hujan');
            $table->boolean('tali_tangga');
            $table->integer('id_pengawasan');
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
        Schema::dropIfExists('peralatan_penunjangs');
    }
}
