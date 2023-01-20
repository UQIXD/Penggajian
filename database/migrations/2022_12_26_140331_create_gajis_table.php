<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->bigInteger('gaji_pokok');
            // $table->integer('bulan');
            // $table->integer('tahun');
            // $table->integer('masa_kerja');
            // $table->foreignId('departemen_id');
            // $table->foreignId('jabatan_id');
            // $table->integer('tj_jabatan');
            // $table->integer('tj_anak');
            // $table->integer('tj_istri');
            // $table->integer('total');
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
        Schema::dropIfExists('gajis');
    }
}
