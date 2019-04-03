<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penjualans', function (Blueprint $table) {
            $table->string('id_transaksi_penjualan')->primary();
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')
                  ->references('id_pegawai')->on('pegawais')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')
                  ->references('id_pelanggan')->on('pelanggans')
                  ->onDelete('cascade');
            $table->date('tanggal');
            $table->double('subtotal');
            $table->string('status_bayar');
            $table->float('diskon');
            $table->double('total_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_penjualans');
    }
}
