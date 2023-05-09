<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'phone' => '0123456789',
            'email' => 'admin@gmail.com',
            'description' => fake()->paragraph,
            'address' => fake()->address,
            'is_employer' => true,
            'company_id' => 1,
        ]);

        User::factory()->create([
            'name' => 'Kun',
            'phone' => '0123456789',
            'email' => 'a@b.c',
            'description' =>'I am August Kun who is an Idol Producer. I have experienced in Entertainment about 2.5 years. I good in sing, dance, rap and play basketball.',
            'address' => fake()->address,
        ]);

        User::factory(10)->create();
    }
}
