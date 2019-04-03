<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSparepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spareparts', function (Blueprint $table) {
            $table->bigIncrements('kode_sparepart');
            $table->string('kode_lokasi');
            $table->foreign('kode_lokasi')
                  ->references('kode_lokasi')->on('lokasis')
                  ->onDelete('cascade');
            $table->string('nama');
            $table->string('merek');
            $table->string('tipe');
            $table->string('gambar');
            $table->double('harga_beli');
            $table->double('harga_jual');
            $table->integer('stok_minimal');
            $table->integer('stok_sekarang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spareparts');
    }
}
