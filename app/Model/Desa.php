<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'kelurahan';

    public $timestamps = false;

    public function kecamatan()
    {
        return $this->belongsTo('App\Model\Kecamatan');
    }

    public function dam()
    {
        return $this->hasMany('App\Model\Bendungan');
    }

}
