<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_posts')->insert([
            [
            'title' => 'Fullstack Developer',
            'salary_lower' => 7000,
            'salary_upper' => 8000,
            'type' => 'Full-time',
            'shift' => 'Monday to Friday',
            'description' => 'We are looking for a fullstack developer in mobile application development. Flutter and React Native preferable.',
            'company_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'UI/UX Designer',
            'salary_lower' => 3000,
            'salary_upper' => 3500,
            'type' => 'Full-time',
            'shift' => 'Monday to Thursday',
            'description' => 'Familiar with Figma.',
            'company_id' => 1,
            'created_at' => now()->subMonth(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Database Administrator',
            'salary_lower' => 4000,
            'salary_upper' => 6000,
            'type' => 'Full-time',
            'shift' => 'Monday to Saturday',
            'description' => 'Experienced in Oracle Database',
            'company_id' => 1,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ]
    ]);
    }
}
