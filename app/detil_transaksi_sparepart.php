<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detil_transaksi_sparepart extends Model
{
    protected $table ='detil_transaksi_spareparts';
    protected $primaryKey = 'id_detil_sparepart';
    public $timestamps = false;
    protected $fillable = ['id_transaksi_penjualan','kode_sparepart','jumlah','harga'];
}
