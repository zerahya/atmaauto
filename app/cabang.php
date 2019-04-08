<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $table ='cabangs';
    protected $primaryKey = 'id_cabang';
    public $timestamps = false;
    protected $fillable = ['nama','alamat','telepon_cabang'];

    public function pegawais(){
        return $this->hasMany('App\pegawai', 'id_cabang', 'id_cabang');
    }

    
}
