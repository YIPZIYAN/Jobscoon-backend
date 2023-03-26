<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobPost::create([
            'title' => 'Fullstack Developer',
            'salary_lower' => 5000,
            'salary_upper' => 8000,
            'type' => 'Full-time',
            'shift' => 'Monday to Friday',
            'description' => 'We are looking for a fullstack developer in mobile application development. Flutter and React Native preferable.',
            'company_id' => 1,
        ]);
    }
}
