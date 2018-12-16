<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Bendungan as Dam;

class DamController extends Controller
{
    public function index(Request $request)
    {

        // return Dam::get();

        if ( $request->input('client') ) {
    	    return Dam::select('id', 'kode_bendungan', 'nama', 'keterangan', 'alamat')->get();
        }
        
        // return Dam::all();

        $columns = ['kode_bendungan', 'nama', 'keterangan', 'alamat'];

        $length = $request->input('length');
        $column = $request->input('column');
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = Dam::select('id', 'kode_bendungan', 'nama', 'keterangan', 'alamat');

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('nama', 'like', '%' . $searchValue . '%')
                ->orWhere('kode_bendungan', 'like', '%' . $searchValue . '%');
            });
        }

        // $dam = $query->paginate($length);
        $dam = ['data' => Dam::all()];
        return ['data' => $dam, 'draw' => $request->input('draw'), 'count' => Dam::count()];
    }

    public function detail($id)
    {
        $data = Dam::findOrFail($id);

        return response()->json($data);
    }

    public function save(Request $request)
    {
        // $data = [
            // 'status' => 'success',
            // 'message' => 'Berhasil mengupdate data bendungan'
        // ];
        
        // return response()->json($data);
        // $data = $request->all();
        $dam = [];

        if($request->id)
        {
            $dam = Dam::findOrFail($request->id);
            $data['message'] = 'Berhasil mengupdate Data Bendungan ' . $request->nama;
        }
        $dam->nama = $request->nama;
        $dam->kode_bendungan = $request->kode_bendungan;
        $dam->alamat = $request->alamat;
        $dam->latitude = $request->latitude;
        $dam->longitude = $request->longitude;
        $dam->token = $request->token;

        if($dam->save())
        {

            $data = [
                'status' => 'success',
                'message' => 'Berhasil mengupdate data bendungan ' . $request->nama
            ];
            
            return response()->json($data);
        }

        // return response()->json($data);
    }

    public function generateToken()
    {
        $token = bin2hex(random_bytes(16));
        return $token;
    }

    protected function generateDamCode($name)
    {
        $token = bin2hex(random_bytes(32));

        return $token;
    }

    public function token()
    {
        $token = bin2hex(random_bytes(32));
        return response()->json($token);
    }
}
