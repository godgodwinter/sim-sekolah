<?php

namespace Database\Seeders;

use App\Models\Admin_settings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                // 'id' => '1',
                'persen' => '75',
            ]
            ];
            foreach ($data as $key => $value){
                Admin_settings::create($value);
            }
        // \App\Models\User::factory(10)->create();
        $this->call(TapelsSeeder::class);
        $this->call(KelassSeeder::class);
    }
}
