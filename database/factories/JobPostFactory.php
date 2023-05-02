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

    private const SHIFT = [
        'Monday to Thursday',
        'Monday to Friday',
        'Monday to Saturday',
        'Saturday and Sunday',
        'Friday to Sunday',
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
        $shift = fake()->randomElement(SELF::SHIFT);
        do{
            $salaryHigher = fake()->numberBetween(1500,9999);
        }while($salaryLower > $salaryHigher);
        return [
            'title' => fake()->jobTitle(),
            'salary_lower' => $salaryLower,
            'salary_upper' => $salaryHigher,
            'type' => $type,
            'shift' => $shift,
            'description' => fake()->paragraph(),
            'company_id' => Company::all()->random()->id,
            
        ];
    }
}
