<?php

namespace Database\Seeders;

use App\Models\Street;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Street::create([
            'street_name'=>'Esebiy',
            'house_count'=>33,
            'population'=>123,
        ]);
        Street::create([
            'street_name'=>'Qarasiyraq',
            'house_count'=>42,
            'population'=>230,
        ]);
        Street::create([
            'street_name'=>'Qosar',
            'house_count'=>55,
            'population'=>333,
        ]);
        Street::create([
            'street_name'=>'Aqtuba gúzarı',
            'house_count'=>51,
            'population'=>323,
        ]);
    }
}
