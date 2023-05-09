<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'IKUN Enterprise',
            'contact_number' => '0308020802',
            'email' => 'ikun@kun.com',
            'reg_no' => '202305980802',
            'location' => 'No 82, Jalan Genting Klang, 12345 Setapak, Kuala Lumpur',
        ]);

        Company::factory(10)->create();
    }
}
