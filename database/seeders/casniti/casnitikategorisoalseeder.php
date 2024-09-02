<?php

namespace Database\Seeders\casniti;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class casnitikategorisoalseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori' => 'Matematika'],
            ['kategori' => 'Bahasa Indonesia'],
            ['kategori' => 'Bahasa Inggris']
        ];

        foreach ($data as $d) {
            DB::table('casnitikategorisoals')->insert($d);
        }
    }
}
