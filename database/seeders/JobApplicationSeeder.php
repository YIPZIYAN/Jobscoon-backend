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
        DB::table('job_applications')->insert([[
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
        ]]);
    }
}
