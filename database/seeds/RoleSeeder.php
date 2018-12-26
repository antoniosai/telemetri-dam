<?php

use Illuminate\Database\Seeder;

use App\Model\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role Seeder
        $role_data = [
            [
                'slug' => 'admin',
                'name' => 'Administrator',
                'description' => 'Role Administrator'
            ],
            [
                'slug' => 'user',
                'name' => 'User',
                'description' => 'Basic usage',
            ]
        ];

        foreach($role_data as $list)
        {
            $model = Role::where('slug', $list['slug'])->first();

            if($model)
            {
                $model->delete();
            }
            $role = new Role;
            $role->slug = $list['slug'];
            $role->name = $list['name'];
            $role->description = $list['description'];
            $role->save();
        }
    }
}
