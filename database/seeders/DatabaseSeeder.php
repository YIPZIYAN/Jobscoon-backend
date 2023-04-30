<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CareerDevelopmentApplication;
use App\Models\JobInterview;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CompanySeeder::class,
            UserSeeder::class,
            JobPostSeeder::class,
            CareerDevelopmentSeeder::class,
            CareerDevelopmentApplicationSeeder::class,
            JobApplicationSeeder::class,
            JobInterviewSeeder::class,
        ]);
    }
}
