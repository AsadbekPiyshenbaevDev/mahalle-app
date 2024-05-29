<?php

namespace Database\Seeders;

use App\Models\Employmenttype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploymenttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employmenttype::create([
            'name'=>"Rásmiy jumıssız dep tabılǵan",
        ]);
        Employmenttype::create([
            'name'=>"Bala tárbiyası menen bánt bolǵanlar",
        ]);
        Employmenttype::create([
            'name'=>"Kárxana hám shólkemlerde islewshiler",
        ]);
        Employmenttype::create([
            'name'=>"Tádbirkarlıq penen bánt bolǵanlar",
        ]);
        Employmenttype::create([
            'name'=>"Islewshi pensionerler",
        ]);
        Emplttype::create([
            'name'=>"Máwsimlik jumıslar menen bánt",
        ]);
    }
}
