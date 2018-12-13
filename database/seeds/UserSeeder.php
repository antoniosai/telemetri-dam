<?php

use Illuminate\Database\Seeder;

use App\User;

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
                'username' => 'antoniosai',
                'password' => 'rahasia123',
                'email' => 'finallyantonio@gmail.com'
            ],
            [
                'name' => 'Administrator',
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
            $user->username = $list['username'];
            $user->name = $list['name'];
            $user->email = $list['email'];
            $user->password = bcrypt($list['password']);
            $user->save();
        }
    }

    
}
