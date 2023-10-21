<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Ramon',
            'namadok' => 'emuz. S.Ked.',
            'role' => 'user',
            'password' => bcrypt(12209364),
         ]);
        User::create([
            'username' => 'Dian',
            'ruang' => '145',
            'hari' => 'senin',
            'role' => 'kasir',
            'password' => bcrypt(12209364),
         ]);
        User::create([
            'username' => 'adminapotekwikramaproject',
            'ruang' => 'Server',
            'hari' => 'senin',
            'role' => 'Admin',
            'password' => bcrypt(12209364),
         ]);
    }
}
