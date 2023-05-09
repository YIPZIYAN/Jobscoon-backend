<?php

namespace Database\Factories;

use App\Models\JobPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobInterview>
 */
class JobInterviewFactory extends Factory
{
    private const TYPE = [
        'physical',
        'virtual',
    ];
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
        $type = fake()->randomElement(SELF::TYPE);
        $startTime = fake()->time();
        $endTime = fake()->time();
        if($endTime <= $startTime){
            $endTime = fake()->dateTimeBetween($startTime, '+1 day');
        }  
        if ($type != 'virtual') {
            $location = fake()->address();
            $link = null;
        }else{
            $location = null;
            $link =fake()->url();
        }
        return [
            // 'user_id' => User::where('is_employer',false)->get()->random()->id,
            // 'job_post_id' => JobPost::all()->random()->id,
            'date' => fake()->dateTimeBetween('+1 day', '+1 month'),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'type' => $type,
            'link' => $link,
            'location' => $location,
            'status' => $status,
            'description' => fake()->paragraph(),
        ];
    }
}
