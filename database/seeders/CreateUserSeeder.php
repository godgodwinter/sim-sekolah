<?php

namespace Database\Seeders;

use App\Models\Admin_settings;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                // 'id' => '1',
                'persen' => '75',
            ]
            ];
            foreach ($data as $key => $value){
                Admin_settings::create($value);
            }

        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Kukuh',
                'email' => 'kukuh@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123'),
            ]
            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
