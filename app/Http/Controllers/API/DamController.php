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

    public function register(Request $request)
    {
        $data = $request->all();

        return response()->json($data);
    }

    protected function generateToken()
    {
        $token = bin2hex(random_bytes(16));

        return $token;
    }

    protected function generateDamCode($name)
    {
        $token = bin2hex(random_bytes(32));

        return $token;
    }
}
