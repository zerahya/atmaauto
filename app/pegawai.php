<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{

    protected $table ='pegawais';
    protected $primaryKey = 'id';
    protected $foreignKey= 'id_role'. 'id_cabang';
    public $timestamps = false;
    protected $fillable = ['nama','alamat','gaji','username','password','telepon_pegawai','id_role','id_cabang'];


}
