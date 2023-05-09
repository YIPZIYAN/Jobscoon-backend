<?php

namespace Database\Seeders;

use App\Models\JobApplication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            JobApplication::create([
                'job_post_id' => 1,
                'user_id' => 2,
                'job_interview_id' => null,
                'status' => 'pending',
            ]);
        
            JobApplication::create([
                'job_post_id' => 2,
                'user_id' => 2,
                'job_interview_id' => 1,
                'status' => 'accept',
            ]);
        
            JobApplication::create([
                'job_post_id' => 3,
                'user_id' => 2,
                'job_interview_id' => null,
                'status' => 'decline',
            ]);
        
            JobApplication::factory(10)->create();
        }

}
}