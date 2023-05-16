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
            'description' => 'Congratulations on making it to the interview stage for the Fullstack Developer position! During the interview, we aim to assess your technical skills, problem-solving abilities, and fit for our team. Remember to prepare the project that you have done before',
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
            'description' => 'Congratulations on making it to the interview stage for the UI/UX Designer position! During the interview, we aim to assess your technical skills, problem-solving abilities, and fit for our team. Remember to prepare the project that you have done before with using Figma',
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
            'description' => 'Congratulations on reaching the interview stage for the Database Administrator position! During the interview, we will assess your knowledge and skills related to database administration, problem-solving abilities, and fit for our team. We will have some test on your Oracle database skill',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 2,
            'job_post_id' => 4,
            'date' => "2023-06-20",
            'start_time' => '10:00',
            'end_time' => '12:00',
            'type' => 'physical',
            'link' => '',
            'location' => '321 Elm Street, Suite 500, Anytown, USA',
            'description' => 'Congratulations on reaching the interview stage for the SQL Server Administrator position! During the interview, we will assess your knowledge and skills related to SQL Server administration, problem-solving abilities, and fit for our team.The interview may consist of the following components:Introduction your background, Technical Assessment, SQL Server Management and Optimization,Troubleshooting and Problem-Solving and Collaboration and Communication',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 4,
            'job_post_id' => 2,
            'date' => "2023-09-05",
            'start_time' => '11:00',
            'end_time' => '12:00',
            'type' => 'physical',
            'link' => '',
            'location' => '789 Maple Street, Suite 200, Anytown, USA',
            'description' => 'Congratulations on making it to the interview stage for the UI/UX Designer position! During the interview, we aim to assess your technical skills, problem-solving abilities, and fit for our team. Remember to prepare the project that you have done before with using Figma',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    // JobInterview::factory(10)->create();
    }
}
