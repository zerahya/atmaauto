<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detil_transaksi_jasa extends Model
{
    protected $table ='detil_transaksi_jasas';
    protected $primaryKey = 'id_detil_jasa';
    public $timestamps = false;
    protected $fillable = ['id_transaksi_penjualan','nomor_polisi','id_pegawai','jumlah','harga','id_jasa','status'];
}
