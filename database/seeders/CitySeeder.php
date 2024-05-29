<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name'=>'Ámiwdarya rayonı'
        ]);
        City::create([
            'name'=>'Beruniy rayonı'
        ]);
        City::create([
            'name'=>'Bozataw rayonı'
        ]);
        City::create([
            'name'=>'Ellikqala rayonı'
        ]);
        City::create([
            'name'=>'Kegeyli rayonı'
        ]);
        City::create([
            'name'=>'Moynaq rayonı'
        ]);
        City::create([
            'name'=>'Nókis qalası'
        ]);
        City::create([
            'name'=>'Nókis rayonı'
        ]);
        City::create([
            'name'=>'Qaraózek rayonı'
        ]);
        City::create([
            'name'=>'Qanlıkól rayonı'
        ]);
        City::create([
            'name'=>'Qońırat rayonı'
        ]);
        City::create([
            'name'=>'Shımbay rayonı'
        ]);
        City::create([
            'name'=>'Shomanay rayonı'
        ]);
        City::create([
            'name'=>'Taqiyatas rayonı'
        ]);
        City::create([
            'name'=>'Taxtakópir rayonı'
        ]);
        City::create([
            'name'=>'Tórtkúl rayonı'
        ]);
    }
}
