<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Weather;

class WeatherController extends Controller
{
    public function index()
    {

    }

    public function detail($id)
    {

    }

    public function destroy($id)
    {
        $weather = Weather::findOrFail($id);

        if($weather->delete())
        {
            $data = [
                'status' => 'success',
                'message' => 'Successfully Deleted!'
            ];

            return response()->json($data);
        }
    }
}
