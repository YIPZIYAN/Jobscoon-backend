<?php

namespace Database\Seeders;

use App\Http\Controllers\CareerDevelopmentApplicationController;
use App\Models\CareerDevelopmentApplication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerDevelopmentApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CareerDevelopmentApplication::create([
            'user_id' => 1,
            'career_development_id' => 1,
        ]);
        CareerDevelopmentApplication::factory(10)->create();

    }
}
