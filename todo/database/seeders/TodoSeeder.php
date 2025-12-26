<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'title' => 'ももクロのライブに行く',
            'is_done' => false,
            'due_date' => '2023-12-31',
        ]);

        Todo::create([
            'title' => 'Laravelの勉強をする',
            'is_done' => true,
            'due_date' => now()->addDays(3)
        ]);
    }
}
