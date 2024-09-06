<?php

namespace Database\Seeders\casniti;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class casnitisubkategorisoalseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['subkategorisoal' => 'Matematika Dasar', 'casnitikategorisoal_id' => 1],
            ['subkategorisoal' => 'Matematika Lanjutan', 'casnitikategorisoal_id' => 1],
            ['subkategorisoal' => 'Matematika Statistika', 'casnitikategorisoal_id' => 1],
            ['subkategorisoal' => 'Matematika Diskrit', 'casnitikategorisoal_id' => 1],
            ['subkategorisoal' => 'Bahasa Indonesia Pemula', 'casnitikategorisoal_id' => 2],
            ['subkategorisoal' => 'Bahasa Indonesia Menengah', 'casnitikategorisoal_id' => 2],
            ['subkategorisoal' => 'Bahasa Indonesia Tingkat Lanjut', 'casnitikategorisoal_id' => 2],
            ['subkategorisoal' => 'Bahasa Inggris Pemula', 'casnitikategorisoal_id' => 3],
            ['subkategorisoal' => 'Bahasa Inggris Menengah', 'casnitikategorisoal_id' => 3],
            ['subkategorisoal' => 'Bahasa Inggris Tingkat Lanjut', 'casnitikategorisoal_id' => 3]
        ];

        foreach ($data as $d) {
            DB::table('casnitisubkategorisoals')->insert($d);
        }

    }
}
