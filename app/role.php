<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table ='roles';
    protected $primaryKey = 'id_role';
    public $timestamps = false;
    protected $fillable = ['role'];

    public function pegawais(){
        return $this->hasMany('App\pegawai', 'id_role', 'id_role');
    }
}
