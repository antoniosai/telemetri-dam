<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', '!=', $id)->get();

        return response()->json($user);
    }

    public function register(Request $request)
    {
        $type = $request->type;

        $user = new User;

        $data = [];

        if($type != 'new' && $request->user_id) 
        {
            $user = User::findOrFail($request->user_id);
        }

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if($user->save)
        {
            $data = [
                'status' => 'success',
                'message' => 'Berhasil mengupdate User'
            ];

            return response()->json($data);
        }


    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if($user->delete())
        {
            $data = [
                'status' => 'success',
                'message' => 'User successfully Deleted'
            ];

            return response()->json($data);
        }
    }
}
