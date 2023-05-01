<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use App\Models\CareerDevelopment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CareerDevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('career_developments')->insert([
            [
                'title' => 'Idol Producer 2.0',
                'date_start' => '2022-01-21',
                'date_end' => '2023-01-20',
                'start_time' => '11:00',
                'end_time' => '13:00',
                'type' => 'physical',
                'link' => 'https://www.idolproducer2.com',
                'location' => 'Lot 22,Bangunan Thai Ku La, Jalan Hantu Kecil, Wangsa Maju, 55500 Kuala Lumpur',
                'description' => 'To produce more Idol',
                'capacity' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Youth with job',
                'date_start' => '2022-02-23',
                'date_end' => '2023-02-24',
                'start_time' => '11:00',
                'end_time' => '13:00',
                'type' => 'physical',
                'link' => 'https://www.youthwithjob.com',
                'location' => 'Lot 11,Freestyle Building , Jalan Besar, Setapak, 54400 Kuala Lumpur',
                'description' => 'Introduce the job to the employee and let them have a better chance to know what will they do',
                'capacity' => '200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Crush on job',
                'date_start' => '2022-08-02',
                'date_end' => '2023-08-02',
                'start_time' => '11:00',
                'end_time' => '13:00',
                'type' => 'virtual',
                'link' => 'https://www.crushonjob.com',
                'location' => '',
                'description' => 'Let the employee have more interest on their job',
                'capacity' => '200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        CareerDevelopment::factory(10)->create();
    }
}
