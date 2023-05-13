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
            'shift_start' => 'Monday',
            'shift_end' => 'Firday',
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
            'shift_start' => 'Monday',
            'shift_end' => 'Thursday',
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
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'Experienced in Oracle Database',
            'company_id' => 1,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'SQL Server Administrator',
            'salary_lower' => 4500,
            'salary_upper' => 6500,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'Experienced in managing SQL Server databases',
            'company_id' => 2,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Database Developer',
            'salary_lower' => 3500,
            'salary_upper' => 5500,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Friday',
            'description' => 'Experienced in database design and development',
            'company_id' => 3,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'MySQL Administrator',
            'salary_lower' => 4200,
            'salary_upper' => 6200,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'Experienced in managing MySQL databases',
            'company_id' => 4,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Product Promoter',
            'salary_lower' => 400,
            'salary_upper' => 500,
            'type' => 'Part-Time',
            'shift_start' => 'Saturday',
            'shift_end' => 'Sunday',
            'description' => 'Promote our product',
            'company_id' => 1,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Data Analyst',
            'salary_lower' => 3800,
            'salary_upper' => 5800,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Friday',
            'description' => 'Experienced in analyzing and reporting on data',
            'company_id' => 5,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Database Architect',
            'salary_lower' => 5000,
            'salary_upper' => 7000,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Friday',
            'description' => 'Experienced in designing and implementing complex database systems',
            'company_id' => 6,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Database Manager',
            'salary_lower' => 5500,
            'salary_upper' => 7500,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'Experienced in managing a team of database administrators and developers',
            'company_id' => 7,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
    ]);
    // JobPost::factory(10)->create();
    }
}
