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
        DB::table('job_applications')->insert([
            [
                'job_post_id' => 1,
                'user_id' => 2,
                'status' => 'accept',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_post_id' => 2,
                'user_id' => 2,
                'status' => 'accept',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_post_id' => 3,
                'user_id' => 2,
                'status' => 'accept',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_post_id' => 6,
                'user_id' => 2,
                'status' => 'declined',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_post_id' => 2,
                'user_id' => 3,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_post_id' => 1,
                'user_id' => 4,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_post_id' => 2,
                'user_id' => 4,
                'status' => 'accept',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_post_id' => 4,
                'user_id' => 2,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        // JobApplication::factory(10)->create();
    }
}
