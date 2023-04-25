<?php

namespace Database\Seeders;

use App\Models\CareerDevelopment;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerDevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CareerDevelopment::create([
            'title' => 'Idol Producer 2.0',
            'date_start' => '11/05/2023',
            'date_end' => '12/05/2023',
            'start_time' => '11:00',
            'end_time' => '13:00',
            'type' => 'physical',
            'link' => 'https://www.idolproducer2.com',
            'location' => 'Lot 22,Bangunan Thai Ku La, Jalan Hantu Kecil, Wangsa Maju, 55500 Kuala Lumpur',
            'description' => 'To produce more Idol',
            'capacity' => '100',
        ]);
    }
}
