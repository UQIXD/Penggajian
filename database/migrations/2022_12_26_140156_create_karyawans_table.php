<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nm_karyawan');
            $table->string('jns_kelamin');
            $table->string('agama');
            $table->date('ttl');
            $table->string('no_telpon');
            $table->string('status');
            $table->string('alamat');
            $table->string('kewarganegaraan');
            $table->string('foto');
            $table->foreignId('gaji_id');
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
        Schema::dropIfExists('karyawans');
    }
}
