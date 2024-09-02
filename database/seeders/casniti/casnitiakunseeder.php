<?php

namespace Database\Seeders\casniti;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class casnitiakunseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Ade', 'email' => 'ade@gmail.com'],
            ['nama' => 'Budi', 'email' => 'budi@gmail.com'],
            ['nama' => 'Cici', 'email' => 'cici@gmail.com'],
            ['nama' => 'Dedi', 'email' => 'dedi@gmail.com']
        ];

        DB::table('casnitiakuns')->insert($data);
    }
}
