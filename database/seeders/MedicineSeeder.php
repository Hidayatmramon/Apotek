<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicine::create([
            'type' => 'tablet',
            'name' => 'paracetamol',
            'photo' => public_path('../../public/login/images/logo.png'), // Use the absolute path to the image
            'price' => 10000,
            'stock' => 100,
        ]);
    }
}
