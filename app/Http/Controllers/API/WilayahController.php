<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Provinsi;
use App\Model\Kota;
use App\Model\Kecamatan;
use App\Model\Desa;
use App\Model\Bendungan as Dam;

class WilayahController extends Controller
{
    public function getProvinsi()
    {
        $data = Provinsi::all();

        $wilayah = [];

        foreach($data as $list)
        {
            $temp = [
                'value' => $list->id,
                'label' => $list->nama
            ];

            array_push($wilayah, $temp);
            unset($temp);
        }

        return response()->json($wilayah);
    }

    public function getKota($prov_id)
    {
        $data = Kota::where('provinsi_id', $prov_id)->get();

        $wilayah = [];

        foreach($data as $list)
        {
            $temp = [
                'value' => $list->id,
                'label' => $list->nama
            ];

            array_push($wilayah, $temp);
            unset($temp);
        }
        return response()->json($wilayah);
    }

    public function getKec($kota_id)
    {
        $data = Kecamatan::where('kota_id', $kota_id)->get();
        $wilayah = [];

        foreach($data as $list)
        {
            $temp = [
                'value' => $list->id,
                'label' => $list->nama
            ];

            array_push($wilayah, $temp);
            unset($temp);
        }
        return response()->json($wilayah);
    }

    public function getDesa($kec_id)
    {
        $data = Desa::where('kecamatan_id', $kec_id)->get();
        $wilayah = [];

        foreach($data as $list)
        {
            $temp = [
                'value' => $list->id,
                'label' => $list->nama
            ];

            array_push($wilayah, $temp);
            unset($temp);
        }
        return response()->json($wilayah);
    }

    public function namaProvinsi()
    {
        $data = [];

        foreach(Dam::all() as $dam)
        {
            $prov = $dam->provinsi_id;
            array_push($data, $prov);
        }
        $prov_id = array_unique(array_values(array_filter($data)));

        $prov = Provinsi::whereIn('id', $prov_id)->get();

        $data_prov = [];

        foreach($prov as $list)
        {
            array_push($data_prov, $list->nama);
        }

        return response()->json($data_prov);
    }
}
