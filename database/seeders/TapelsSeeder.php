<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TapelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            $tapel=$faker->year($max = 'now');
            // insert data ke table products menggunakan Faker
            DB::table('tapels')->insert([
              'nama' => $tapel.'/'.($tapel+1),
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
             ]);
    }
    }
}
