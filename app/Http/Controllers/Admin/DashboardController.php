<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Bendungan;
use App\Model\Info;

class DashboardController extends Controller
{
    public function index()
    {
        $hitung_persentasi_pencapaian = Bendungan::count() * 100  / Info::first()->target_bendungan;

        $persentasi_pencapaian = number_format((float)$hitung_persentasi_pencapaian, 2, '.', '');
        
        $data = [
            'bendungan' => Bendungan::all(),
            'persentasi_pencapaian' => $persentasi_pencapaian
        ];
        return view('admin.dashboard', $data);
    }
}
