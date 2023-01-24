<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id');
            $table->foreignId('absensi_id');
            $table->foreignId('lembur');
            $table->foreignId('tunjangan_id');
            $table->foreignId('pph_id');
            $table->foreignId('bpjs_id');
            $table->foreignId('ass_kec_id');
            $table->foreignId('ass_kem_id');
            $table->foreignId('iuran_pensiun_id');
            $table->foreignId('iuran_organisasi_id');
            $table->bigInteger('denda');
            $table->bigInteger('lain-lain');
            $table->bigInteger('tot_pot');
            $table->bigInteger('subtot');
            $table->bigInteger('gtot');
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
        Schema::dropIfExists('details');
    }
}
