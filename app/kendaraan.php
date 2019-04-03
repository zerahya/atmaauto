<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $table ='kendaraans';
    protected $primaryKey = 'nomor_polisi';
    public $timestamps = false;
    protected $fillable = ['merek','tipe','id_pelanggan'];
}
