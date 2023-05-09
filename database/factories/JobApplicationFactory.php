<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\JobPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobApplication>
 */
class JobApplicationFactory extends Factory
{
    private const STATUS = [
        'pending',
        'accept',
        'decline',
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(SELF::STATUS);
        return [
            'job_post_id' => JobPost::all()->random()->id,
            'user_id' => User::where('is_employer',false)->get()->random()->id,
            'status' => $status,
        
        ];
    }
}
