<?php

namespace Database\Seeders;

use App\Models\Nationality as ModelsNationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Nationality extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsNationality::create([
            'name'=>'Qaraqalpaq'
        ]);
        ModelsNationality::create([
            'name'=>'Qazaq'
        ]);
        ModelsNationality::create([
            'name'=>'Ózbek'
        ]);
        ModelsNationality::create([
            'name'=>'Rus'
        ]);
        ModelsNationality::create([
            'name'=>'Túrkimen'
        ]);
        ModelsNationality::create([
            'name'=>'Tájik'
        ]);
    }
}
