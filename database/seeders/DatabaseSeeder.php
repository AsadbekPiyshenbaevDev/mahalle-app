<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Nationality;
use App\Models\Relative;
use App\Models\Street;
use Database\Seeders\Nationality as SeedersNationality;
use Database\Seeders\Relative as SeedersRelative;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            StreetSeeder::class,
            SeedersNationality::class,
            SeedersRelative::class,
            CitySeeder::class,
            CountrySeeder::class,
            GenderSeeder::class,
            PositionSeeder::class,
            TypeSeeder::class,
            NotebookTypeSeeder::class,
            EmploymenttypeSeeder::class,
            DiseasetypeSeeder::class,
        ]);
    }
}
