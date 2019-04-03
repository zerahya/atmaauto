<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $table ='lokasis';
    protected $primaryKey = 'kode_lokasi';
    public $timestamps = false;
    protected $fillable = ['nama'];
}
