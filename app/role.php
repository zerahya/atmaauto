<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table ='roles';
    protected $primaryKey = 'id_role';
    public $timestamps = false;
    protected $fillable = ['role'];
}
