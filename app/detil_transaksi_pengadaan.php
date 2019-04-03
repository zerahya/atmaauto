<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detil_transaksi_pengadaan extends Model
{
    protected $table ='detil_transaksi_pengadaans';
    protected $primaryKey = 'id_detil_pengadaan';
    public $timestamps = false;
    protected $fillable = ['id_transaksi_pengadaan','kode_sparepart','jumlah','harga','status'];
}
