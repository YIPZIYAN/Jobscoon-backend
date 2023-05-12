<?php

namespace Database\Seeders;

use App\Models\JobInterview;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobInterviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_interviews')->insert([
        [
            'user_id' => 2,
            'job_post_id' => 1,
            'date' => "2023-01-20",
            'start_time' => '11:00',
            'end_time' => '13:00',
            'type' => 'virtual',
            'link' => 'https://www.meet.com/ikun-for-ever',
            'location' => null,
            'description' => 'Remember to prepare the project that you have done before',
            'created_at' => now(),
            'updated_at' => now(), 
        ],
        [
            'user_id' => 2,
            'job_post_id' => 2,
            'date' => "2023-01-21",
            'start_time' => '11:00',
            'end_time' => '13:00',
            'type' => 'physical',
            'link' => null,
            'location' => 'No 82, Jalan Genting Klang, 12345 Setapak, Kuala Lumpur',
            'description' => 'Remember to prepare the project that you have done before with using Figma',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 2,
            'job_post_id' => 3,
            'date' => "2023-01-23",
            'start_time' => '12:00',
            'end_time' => '13:00',
            'type' => 'virtual',
            'link' => 'https://www.ikunenterprise.com',
            'location' => null,
            'description' => 'We will have some test on your Oracle database skill',
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
    // JobInterview::factory(10)->create();
    }
}
