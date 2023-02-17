<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potongans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gaji_id');
            $table->integer('pot_pph');
            $table->integer('pot_ass_kec');
            $table->integer('pot_ass_kem');
            $table->integer('pot_iuran_tht');
            $table->integer('pot_iuran_pensiun');
            $table->integer('pot_iuran_organisasi');
            $table->bigInteger('denda_terlambat');
            $table->bigInteger('limit_izin');
            $table->bigInteger('denda_izin');
            $table->bigInteger('limit_cuti');
            $table->bigInteger('denda_cuti');
            $table->bigInteger('denda_alpha');
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
        Schema::dropIfExists('potongans');
    }
}
