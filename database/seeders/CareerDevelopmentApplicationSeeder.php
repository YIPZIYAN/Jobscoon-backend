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
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'user_id' => 1,
                'career_development_id' => 2,
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'user_id' => 2,
                'career_development_id' => 3,
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'user_id' => 2,
                'career_development_id' => 4,
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'user_id' => 3,
                'career_development_id' => 5,
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'user_id' => 2,
                'career_development_id' => 4,
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'user_id' => 2,
                'career_development_id' => 1,
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'user_id' => 3,
                'career_development_id' => 2,
                'created_at' => now(),
                'updated_at' =>now(),
            ],
        ]);
        // CareerDevelopmentApplication::factory(10)->create();

    }
}
