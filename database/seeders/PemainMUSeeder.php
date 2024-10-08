<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PemainMU;

class PemainMUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($id=0; $id < 5; $id++){
            PemainMU::create([   
                'nama_pemain'=> fake()->name(),
                'no_punggung'=>fake()->numberBetween(int1: 1, int2:24),
                'posisi'=>fake()->sentence(nbWords: 2),
            ]);
        }
    }
}
