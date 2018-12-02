<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Bendungan as Dam;

class DamController extends Controller
{
    public function index()
    {

    }

    public function detail($dam_code)
    {
        $data = Dam::where('kode_bendungan', $dam_code)->firstOrFail();

        return view('admin.dam.detail', [
            'data' => $data
        ]);
    }

}
