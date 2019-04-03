<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->bigIncrements('id_pegawai');
            $table->string('nama');
            $table->string('alamat');
            $table->double('gaji');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('telepon_pegawai');
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')
                    ->references('id_role')->on('roles')
                    ->onDelete('cascade');
            
            $table->unsignedBigInteger('id_cabang');
            $table->foreign('id_cabang')
                    ->references('id_cabang')->on('cabangs')
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
        Schema::dropIfExists('pegawais');
    }
}
