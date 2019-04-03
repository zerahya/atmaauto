<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
    protected $table ='jasas';
    protected $primaryKey = 'id_jasa';
    public $timestamps = false;
    protected $fillable = ['id_jasa','nama','harga'];
}
