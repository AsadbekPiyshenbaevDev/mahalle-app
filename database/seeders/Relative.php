<?php

namespace Database\Seeders;

use App\Models\Relative as ModelsRelative;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Relative extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsRelative::create([
            'name' => 'Ákesi',
        ]);
        ModelsRelative::create([
            'name' => 'Anası',
        ]);
        ModelsRelative::create([
            'name' => 'Balası',
        ]);
        ModelsRelative::create([
            'name' => 'Qızı',
        ]);
        ModelsRelative::create([
            'name' => 'Kelini',
        ]);
        ModelsRelative::create([
            'name' => 'Aqlıǵı',
        ]);
        ModelsRelative::create([
            'name' => 'Áyeli',
        ]);
        ModelsRelative::create([
            'name' => 'Kiyewi',
        ]);
        ModelsRelative::create([
            'name' => 'Basqa',
        ]);
        
    }
}
