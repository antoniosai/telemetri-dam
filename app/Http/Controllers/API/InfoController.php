<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Info;

class InfoController extends Controller
{
    public function get_info()
    {
    	$data = Info::first();

    	return response(['status' => 'success', 'data' => $data]);
    }
}
