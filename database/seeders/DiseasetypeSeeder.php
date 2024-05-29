<?php

namespace Database\Seeders;

use App\Models\Diseasetype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseasetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diseasetype::create([
            'name'=>'1-gruppa'
        ]);
        Diseasetype::create([
            'name'=>'2-gruppa'
        ]);
        Diseasetype::create([
            'name'=>'3-gruppa'
        ]);
    }
}
