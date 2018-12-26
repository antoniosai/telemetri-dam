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

        // return Dam::first()->desa->kecamatan->kota->provinsi->nama;
        $site = [];

        foreach(Dam::all() as $dam)
        {
            $last_response = $dam->last_response;
            $date_response = new \DateTime($last_response);

            $data = [
                'id' => $dam->id,
                'nama' => $dam->nama,
                'kode_bendungan' => $dam->kode_bendungan,
                'latitude' => $dam->latitude,
                'longitude' => $dam->longitude,
                'alamat' => $dam->alamat,
                'keterangan' => $dam->keterangan,
                'desa' => $dam->desa['nama'],
                'kecamatan' => $dam->kecamatan['nama'],
                'kota' => $dam->kota['nama'],
                'provinsi' => $dam->provinsi['nama'],
                'last_response' => \Carbon\Carbon::parse($dam->created_at)->diffForHumans(),
            ];

            array_push($site, $data);
        }

        // return $site;

        $dam = ['data' => $site];
        $json_data= ['data' => $dam, 'draw' => $request->input('draw'), 'count' => Dam::count()];

        return response()->json($json_data);
    }

    public function detail($id)
    {
        $dam = Dam::findOrFail($id);

        $data = [
            'nama' => $dam->nama,
            'kode_bendungan' => $dam->kode_bendungan,
            'alamat' => $dam->alamat,
            'latitude' => $dam->latitude,
            'longitude' => $dam->longitude,
            'keterangan' => $dam->keterangan,
            'token' => $dam->token,
            'desa' => $dam->desa['nama'],
            'kecamatan' => $dam->kecamatan['nama'],
            'kota' => $dam->kota['nama'],
            'provinsi' => $dam->provinsi['nama'],
            'last_response' => $dam->last_response,
        ];



        return response()->json($data);
    }

    public function save(Request $request)
    {
        // return $request->all();
        // $data = [
            // 'status' => 'success',
            // 'message' => 'Berhasil mengupdate data bendungan'
        // ];
        
        // return response()->json($data);
        // $data = $request->all();
        $dam = [];
        $token = '';
        if($request->id)
        {
            $dam = Dam::findOrFail($request->id);
            $data['message'] = 'Berhasil mengupdate Data Bendungan ' . $request->nama;
            $token = $request->token;
        }
        else
        {
            $dam = new Dam;
            $data['message'] = 'Berhasil meregister Dam ' . $request->nama;
            $token = $this->generateToken();
        }
        $dam->nama = $request->nama;
        $dam->kode_bendungan = $request->kode_bendungan;
        $dam->alamat = $request->alamat;
        $dam->latitude = $request->latitude;
        $dam->longitude = $request->longitude;
        $dam->provinsi_id = $request->provinsi_id;
        $dam->kota_id = $request->kota_id;
        $dam->kecamatan_id = $request->kecamatan_id;
        $dam->desa_id = $request->desa_id;
        $dam->token = $token;

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
        $token = bin2hex(random_bytes(32));
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

    public function destroy($id)
    {

        $dam = Dam::findOrFail($id);

        if($dam->delete())
        {
            $data = [
                'status' => 'success',
                'message' => 'Dam berhasil dihapus'
            ];
            return response()->json($data);
        }
    }
}
