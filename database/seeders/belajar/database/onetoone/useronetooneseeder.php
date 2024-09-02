<?php

namespace Database\Seeders\belajar\database\onetoone;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\belajar\database\onetoone\useronetoone as User;

class useronetooneseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Randi Afif2',
            'email' => 'randi.afif23ss@example.com',
            'password' => Hash::make('password123'),
        ]);

    }
}
