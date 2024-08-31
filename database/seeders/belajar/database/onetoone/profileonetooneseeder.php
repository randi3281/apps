<?php

namespace Database\Seeders\belajar\database\onetoone;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\belajar\database\onetoone\profileonetoone as Profile;
use App\Models\belajar\database\onetoone\useronetoone as User;


class profileonetooneseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Ambil semua pengguna yang ada
         $users = User::all();
         // Loop melalui setiap pengguna dan buat profil untuk mereka
         foreach ($users as $user) {
             Profile::create([
                 'useronetoone_id' => $user->id,
                 'phone' => 'Phone untuk ' . $user->name,
             ]);
         }
    }
}
