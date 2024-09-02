<?php

namespace Database\Seeders\casniti;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class casnitihistoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                ['casnitiakun_id' => 1, 'tanggal' => '2024-09-02', 'paket' => 1, 'jenis1' => 'jenis1', 'nilai1' => 100, 'jenis2' => 'jenis2', 'nilai2' => 90, 'jenis3' => 'jenis3', 'nilai3' => 80, 'jenis4' => 'jenis4', 'nilai4' => 70],
                ['casnitiakun_id' => 2, 'tanggal' => '2024-09-02', 'paket' => 2, 'jenis1' => 'jenis1', 'nilai1' => 100, 'jenis2' => 'jenis2', 'nilai2' => 90, 'jenis3' => 'jenis3', 'nilai3' => 80, 'jenis4' => 'jenis4', 'nilai4' => 70],
                ['casnitiakun_id' => 3, 'tanggal' => '2024-09-02', 'paket' => 3, 'jenis1' => 'jenis1', 'nilai1' => 100, 'jenis2' => 'jenis2', 'nilai2' => 90, 'jenis3' => 'jenis3', 'nilai3' => 80, 'jenis4' => 'jenis4', 'nilai4' => 70],
                ['casnitiakun_id' => 4, 'tanggal' => '2024-09-02', 'paket' => 4, 'jenis1' => 'jenis1', 'nilai1' => 100, 'jenis2' => 'jenis2', 'nilai2' => 90, 'jenis3' => 'jenis3', 'nilai3' => 80, 'jenis4' => 'jenis4', 'nilai4' => 70]
        ];

        DB::table('casnitihistories')->insert($data);
    }
}
