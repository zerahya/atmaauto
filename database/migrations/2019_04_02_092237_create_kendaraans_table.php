<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->string('nomor_polisi')->primary();
            $table->string('merek');
            $table->string('tipe');
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')
                  ->references('id_pelanggan')->on('pelanggans')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
