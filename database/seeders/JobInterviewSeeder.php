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
        ],
        [
            'user_id' => 2,
            'job_post_id' => 4,
            'date' => "2023-06-20",
            'start_time' => '10:00',
            'end_time' => '12:00',
            'type' => 'virtual',
            'link' => '',
            'location' => '321 Elm Street, Suite 500, Anytown, USA',
            'description' => 'Interview for Database Administrator position',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 2,
            'job_post_id' => 4,
            'date' => "2023-07-15",
            'start_time' => '9:00',
            'end_time' => '17:00',
            'type' => 'virtual',
            'link' => '',
            'location' => '456 Oak Street, Suite 100, Anytown, USA',
            'description' => 'Full-day onsite interview for Software Engineer position',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 2,
            'job_post_id' => 4,
            'date' => "2023-08-10",
            'start_time' => '14:00',
            'end_time' => '16:00',
            'type' => 'virtual',
            'link' => 'https://www.crushonjob.com',
            'location' => null,
            'description' => 'Virtual job fair for various positions',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 4,
            'job_post_id' => 2,
            'date' => "2023-09-05",
            'start_time' => '11:00',
            'end_time' => '12:00',
            'type' => 'virtual',
            'link' => '',
            'location' => '789 Maple Street, Suite 200, Anytown, USA',
            'description' => 'Interview for Marketing Coordinator position',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    // JobInterview::factory(10)->create();
    }
}
