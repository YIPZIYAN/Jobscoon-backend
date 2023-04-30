<?php

namespace Database\Seeders;

use App\Models\JobApplication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobApplication::create([
            'job_post_id' => 1,
            'user_id' => 1,
            'status' => 'pending',
        ],
        [
            'job_post_id' => 1,
            'user_id' => 2,
            'status' => 'accept',
        ],
        [
            'job_post_id' => 2,
            'user_id' => 3,
            'status' => 'decline',
        ]);
    }
}
