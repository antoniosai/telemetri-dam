<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    public $timestamps = false;

    public function kota()
    {
        return $this->belongsTo('App\Model\Kota');
    }

    public function Desa()
    {
        return $this->hasMany('App\Model\Desa');
    }
}
