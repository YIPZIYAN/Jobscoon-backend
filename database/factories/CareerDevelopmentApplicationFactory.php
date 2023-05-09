<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CareerDevelopment;
use App\Models\CareerDevelopmentApplication;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CareerDevelopmentApplication>
 */
class CareerDevelopmentApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'career_development_id'=> CareerDevelopment::all()->random()->id,
        ];
    }
}
