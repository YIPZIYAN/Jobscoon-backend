<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CareerDevelopmentApplication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\CareerDevelopmentApplicationController;

class CareerDevelopmentApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('career_development_applications')->insert([
            [
                'user_id' => 1,
                'career_development_id' => 1,
            ],
            [
                'user_id' => 1,
                'career_development_id' => 2,
            ],
            [
                'user_id' => 2,
                'career_development_id' => 3,
            ],
            [
                'user_id' => 2,
                'career_development_id' => 4,
            ],
            [
                'user_id' => 3,
                'career_development_id' => 5,
            ],
            [
                'user_id' => 2,
                'career_development_id' => 4,
            ],
            [
                'user_id' => 2,
                'career_development_id' => 1,
            ],
            [
                'user_id' => 3,
                'career_development_id' => 2,
            ],
        ]);
        // CareerDevelopmentApplication::factory(10)->create();

    }
}
