<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_pengadaan extends Model
{
    protected $table ='transaksi_pengadaans';
    protected $primaryKey = 'id_transaksi_pengadaan';
    public $timestamps = false;
    protected $fillable = ['id_supplier','tanggal'];
}
