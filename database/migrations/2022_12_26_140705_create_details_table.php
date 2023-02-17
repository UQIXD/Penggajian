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
            // $table->foreignId('absensi_id');
            $table->foreignId('karyawan_id');
            $table->string('jabatan');
            $table->bigInteger('gaji_pokok');
            $table->bigInteger('lembur');
            $table->bigInteger('tunjangan');
            $table->bigInteger('pph');
            // $table->bigInteger('bpjs');
            $table->bigInteger('ass_kec');
            $table->bigInteger('ass_kem');
            $table->bigInteger('iuran_tht');
            $table->bigInteger('iuran_pensiun');
            $table->bigInteger('iuran_organisasi');
            $table->bigInteger('terlambat');
            $table->bigInteger('izin');
            $table->bigInteger('cuti');
            $table->bigInteger('alpha');
            $table->bigInteger('sakit')->default(0);
            $table->string('biaya')->nullable()->default("");
            $table->bigInteger('jum_bi')->nullable()->default(0);
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
