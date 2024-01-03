<?php

namespace Database\Seeders\mengulang;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class rpegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = Faker::create('id_ID');

        for($x = 1; $x <=30; $x++){
            DB::table('rpegawai')->insert([
                'name'=> $data->name,
                'alamat' => $data->address
            ]);
        }
    }
}
