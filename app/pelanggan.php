<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table ='pelanggans';
    protected $primaryKey = 'id_pelanggan';
    public $timestamps = false;
    protected $fillable = ['nama','alamat','telp'];
}
