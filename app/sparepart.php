<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sparepart extends Model
{
    protected $table ='spareparts';
    protected $primaryKey = 'kode_sparepart';
    public $timestamps = false;
    protected $fillable = ['kode_lokasi','nama','merek','tipe','gambar','harga_beli','harga_jual','stok_minimal','stok_sekarang'];
}
