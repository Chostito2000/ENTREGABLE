<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tour;

class ToursTableSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 instancias de tours utilizando la fábrica
        Tour::factory()->count(10)->create();
    }
}
