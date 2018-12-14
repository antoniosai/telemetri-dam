<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Info;

class InfoController extends Controller
{
    public function index()
    {
        return Info::first();
    }
}
