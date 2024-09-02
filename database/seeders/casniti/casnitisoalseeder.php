<?php

namespace Database\Seeders\casniti;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class casnitisoalseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'casnitisubkategorisoal_id' => 1,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 1,
                'soal' => 'Berapakah hasil dari 1 + 1?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'b',
                'alasan' => 'Karena 1 + 1 = 2'
            ],
            [
                'casnitisubkategorisoal_id' => 1,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 2,
                'soal' => 'Berapakah hasil dari 2 + 2?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'd',
                'alasan' => 'Karena 2 + 2 = 4'
            ],
            [
                'casnitisubkategorisoal_id' => 1,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 3,
                'soal' => 'Berapakah hasil dari 3 + 3?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'e',
                'alasan' => 'Karena 3 + 3 = 6'
            ],
            [
                'casnitisubkategorisoal_id' => 1,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 4,
                'soal' => 'Berapakah hasil dari 4 + 4?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'd',
                'alasan' => 'Karena 4 + 4 = 8'
            ],
            [
                'casnitisubkategorisoal_id' => 1,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 5,
                'soal' => 'Berapakah hasil dari 5 + 5?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'e',
                'alasan' => 'Karena 5 + 5 = 10'
            ],
            [
                'casnitisubkategorisoal_id' => 2,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 1,
                'soal' => 'Berapakah hasil dari 1 x 1?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'a',
                'alasan' => 'Karena 1 x 1 = 1'
            ],
            [
                'casnitisubkategorisoal_id' => 2,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 2,
                'soal' => 'Berapakah hasil dari 2 x 2?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'd',
                'alasan' => 'Karena 2 x 2 = 4'
            ],
            [
                'casnitisubkategorisoal_id' => 2,
                'nomorsoalumum' => 1,
                'nomorsoalkhusus' => 3,
                'soal' => 'Berapakah hasil dari 3 x 3?',
                'ja' => '1',
                'jb' => '2',
                'jc' => '3',
                'jd' => '4',
                'je' => '5',
                'js' => 'e',
                'alasan' => 'Karena 3 x 3 = 9'
            ]
        ];

        foreach ($data as $d) {
            DB::table('casnitisoals')->insert($d);
        }
        
    }
}
