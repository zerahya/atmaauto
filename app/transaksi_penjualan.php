<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_penjualan extends Model
{
    protected $table ='transaksi_penjualans';
    protected $primaryKey = 'id_transaksi_penjualan';
    public $timestamps = false;
    protected $fillable = ['id_pegawai','id_pelanggan','tanggal','subtotal','status_bayar','diskon','total_bayar'];
}
