<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilTransaksiPengadaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_transaksi_pengadaans', function (Blueprint $table) {
            $table->bigIncrements('id_detil_pengadaan');
            $table->unsignedBigInteger('id_transaksi_pengadaan');
            $table->foreign('id_transaksi_pengadaan')
                  ->references('id_transaksi_pengadaan')->on('transaksi_pengadaans')
                  ->onDelete('cascade');
                  
            $table->unsignedBigInteger('kode_sparepart');
            $table->foreign('kode_sparepart')
                  ->references('kode_sparepart')->on('spareparts')
                  ->onDelete('cascade');
            $table->integer('jumlah');
            $table->double('harga');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detil_transaksi_pengadaans');
    }
}
