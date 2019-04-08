<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{

    protected $table ='pegawais';
    protected $primaryKey = 'id_pegawai';
    protected $foreignKey= 'id_role'. 'id_cabang';
    public $timestamps = false;
    protected $fillable = ['nama','alamat','gaji','username','password','telepon_pegawai','id_role','id_cabang'];

    protected $hidden = [
        'password',
    ];

    //tambahan
    public function cabangs()
    {
        return $this->belongsTo('App\cabang', 'id_cabang', 'id_cabang');
    }

    public function roles()
    {
        return $this->belongsTo('App\role', 'id_role', 'id_role');
    }
}
