<?php

namespace Database\Seeders;

use App\Models\NotebookType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotebookTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NotebookType::create([
            'name'=>'Temir dápter'
        ]);
        NotebookType::create([
            'name'=>'Áyeller dápter'
        ]);
        NotebookType::create([
            'name'=>'Jaslar dápter'
        ]);
    }
}
