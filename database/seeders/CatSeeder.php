<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cat;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Cat::factory()->count(50)->create();
    }
}
