<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table ='suppliers';
    protected $primaryKey = 'id_supplier';
    public $timestamps = false;
    protected $fillable = ['nama','alamat','sales','telp'];
}
