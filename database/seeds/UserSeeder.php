<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Model\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User Seeder
        $user_data = [
            [
                'name' => 'Antonio Saiful Islam',
                'role_id' => Role::where('slug', 'user')->first()->id,
                'username' => 'antoniosai',
                'password' => 'rahasia123',
                'email' => 'finallyantonio@gmail.com'
            ],
            [
                'name' => 'Administrator',
                'role_id' => Role::where('slug', 'user')->first()->id,
                'username' => 'admin',
                'password' => 'admin123',
                'email' => 'admin@mail.com'
            ]
        ];

        foreach($user_data as $list)
        {
            $model = User::where('username', $list['username'])->first();

            if($model)
            {
                $model->delete();
            }
            $user = new User;
            $user->role_id = $list['role_id'];
            $user->username = $list['username'];
            $user->name = $list['name'];
            $user->email = $list['email'];
            $user->password = bcrypt($list['password']);
            $user->save();
        }
    }

    
}
