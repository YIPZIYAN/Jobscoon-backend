<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{

    private const TYPE = [
        'Full-time',
        'Part-time',
    ];

    private const SHIFT_START = [
        'Monday',
    ];

    private const SHIFT_END = [
        'Thursday',
        'Saturday',
        'Friday',
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salaryLower = fake()->numberBetween(1500,9999);
        $salaryHigher = fake()->numberBetween(1500,9999);
        $type = fake()->randomElement(SELF::TYPE);
        $shiftStart = fake()->randomElement(SELF::SHIFT_START);
        $shiftEnd = fake()->randomElement(SELF::SHIFT_END);
        do{
            $salaryHigher = fake()->numberBetween(1500,9999);
        }while($salaryLower > $salaryHigher);
        return [
            'title' => fake()->jobTitle(),
            'salary_lower' => $salaryLower,
            'salary_upper' => $salaryHigher,
            'type' => $type,
            'shift_start' => $shiftStart,
            'shift_end' => $shiftEnd,
            'description' => fake()->paragraph(),
            'company_id' => Company::all()->random()->id,
            
        ];
    }
}
