<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Model\Role;

use Auth;

class UserController extends Controller
{
    public function index()
    {
        $id = 1;
        $user = User::where('id', '!=', $id)->get();

        $data = [];

        foreach($user as $list)
        {
            $user_temp = [
                'id' => $list->id,
                'username' => $list->username,
                'name' => $list->name,
                'email' => $list->email,
                'role' => $list->role->name,
                'last_login_at' => $list->last_login_at,
                'last_login_ip' => $list->last_login_ip,
                'created_at' => $list->created_at,
                'updated_at' => $list->updated_at,
            ];

            array_push($data, $user_temp);

            unset($user_temp);
        }

        return response()->json($data);
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

    public function detail($id)
    {
        $user = User::findOrFail($id);

        $data = [
            'status' => 'success',
            'data' => $user
        ];

        return response()->json($data);
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

    public function listRole()
    {
        $data = [];

        foreach(Role::all() as $list)
        {
            array_push($data, $list->name);
        }

        return response()->json($data);
    }
}
