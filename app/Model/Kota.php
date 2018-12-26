<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kabupaten';

    public $timestamps = false;

    public function provinsi()
    {
        return $this->belongsTo('App\Model\Provinsi');
    }

    public function kecamatan()
    {
        return $this->hasMany('App\Model\Kecamatan');
    }

    public function dam()
    {
        return $this->hasMany('App\Model\Bendungan');
    }
}
