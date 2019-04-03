<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilTransaksiJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_transaksi_jasas', function (Blueprint $table) {
            $table->bigIncrements('id_detail_jasa');
            $table->string('id_transaksi_penjualan');
            $table->foreign('id_transaksi_penjualan')
                  ->references('id_transaksi_penjualan')->on('transaksi_penjualans')
                  ->onDelete('cascade');

            $table->string('nomor_polisi');
            $table->foreign('nomor_polisi')
                  ->references('nomor_polisi')->on('kendaraans')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')
                  ->references('id_pegawai')->on('pegawais')
                  ->onDelete('cascade');
            $table->integer('jumlah');
            $table->double('harga');
            $table->unsignedBigInteger('id_jasa');
            $table->foreign('id_jasa')
                  ->references('id_jasa')->on('jasas')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('detil_transaksi_jasas');
    }
}
