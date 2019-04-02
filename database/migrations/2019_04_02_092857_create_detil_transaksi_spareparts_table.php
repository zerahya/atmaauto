<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilTransaksiSparepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_transaksi_spareparts', function (Blueprint $table) {
            $table->bigIncrements('id_detil_sparepart');
            $table->string('id_transaksi_penjualan');
            $table->foreign('id_transaksi_penjualan')
                  ->references('id_transaksi_penjualan')->on('transaksi_penjualans')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('kode_sparepart');
            $table->foreign('kode_sparepart')
                  ->references('kode_sparepart')->on('spareparts')
                  ->onDelete('cascade');
            $table->integer('jumlah');
            $table->double('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detil_transaksi_spareparts');
    }
}
