<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Info;

class InfoController extends Controller
{
    public function getInfo()
    {
        $model = Info::first();

    	$data = [
            'nama_sistem' => $model->nama_sistem,
            'target_bendungan' => $model->target_bendungan,
            'logo' => $model->logo,
            'host' => $model->host,
            'total_bendungan' => \App\Model\Bendungan::count(),
            'total_user' => \App\User::count()
        ];
    	return response(['status' => 'success', 'data' => $data]);
    }

    public function saveInfo(Request $request)
    {
        $info = Info::first();
        $info->nama_sistem = $request->nama_sistem;
        $info->host = $request->host;
        $info->target_bendungan = $request->target_bendungan;

        if($info->save())
        {
            $data = [
                'message' => 'Berhasil diupdate',
                'status' => 'success',
                'data' => $info
            ];

            return response()->json($data);
        }
    }
}
