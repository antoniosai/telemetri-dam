<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    public $timestamps = false;

    public function kota()
    {
        return $this->hasMany('App\Model\Kota');
    }

    public function dam()
    {
        return $this->hasMany('App\Model\Bendungan');
    }
}
