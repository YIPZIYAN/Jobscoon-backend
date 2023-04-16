<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employer::factory()->create([
            'name' => 'Chai Xu Kun',
            'email' => 'cxk@gmail.com',
            'company_id' => 1,
        ]);

        Employer::factory(10)->create();
    }
}
