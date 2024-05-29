<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            'name'=> 'Máhálle aqsaqalı'
        ]);
        Position::create([
            'name'=> 'Profilaktika inspektorı'
        ]);
        Position::create([
            'name'=> 'Hayal-qızlar jetekshisi'
        ]);
        Position::create([
            'name'=> 'Salıq inspekorı'
        ]);
        Position::create([
            'name'=> 'Hákim járdemshisi'
        ]);
        Position::create([
            'name'=> 'Sociallıq xizmetker'
        ]);
        Position::create([
            'name'=> 'Jaslar jeekshisi'
        ]);
    }
}
