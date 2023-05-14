<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use App\Models\CareerDevelopment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
                'link' => '',
                'location' => 'Lot 22,Bangunan Thai Ku La, Jalan Hantu Kecil, Wangsa Maju, 55500 Kuala Lumpur',
                'description' => 'To produce more Idol',
                'max_capacity' => '200',
                'capacity' => '100',
                'image' => 'app/storage/images/cd1.jpg',
                'company_id' => 1,
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
                'link' => '',
                'location' => 'Lot 11,Freestyle Building , Jalan Besar, Setapak, 54400 Kuala Lumpur',
                'description' => 'Introduce the job to the employee and let them have a better chance to know what will they do',
                'max_capacity' => '200',
                'capacity' => '200',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 1,
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
                'max_capacity' => '200',
                'capacity' => '200',
                'image' => 'app/storage/images/cd3.jpg',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Networking for Success',
                'date_start' => '2023-06-15',
                'date_end' => '2023-06-15',
                'start_time' => '14:00',
                'end_time' => '16:00',
                'type' => 'physical',
                'link' => '',
                'location' => '123 Main Street, Suite 100, Anytown, USA',
                'description' => 'Learn how to network effectively and make meaningful connections in your industry',
                'max_capacity' => '50',
                'capacity' => '50',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Introduction to Python',
                'date_start' => '2023-07-10',
                'date_end' => '2023-07-12',
                'start_time' => '10:00',
                'end_time' => '14:00',
                'type' => 'virtual',
                'link' => 'https://www.introtopython.com',
                'location' => '',
                'description' => 'Learn the basics of programming in Python',
                'max_capacity' => '100',
                'capacity' => '100',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Networking for Success',
                'date_start' => '2023-06-15',
                'date_end' => '2023-06-15',
                'start_time' => '14:00',
                'end_time' => '16:00',
                'type' => 'physical',
                'link' => '',
                'location' => '123 Main Street, Suite 100, Anytown, USA',
                'description' => 'Learn how to network effectively and make meaningful connections in your industry',
                'max_capacity' => '50',
                'capacity' => '50',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Introduction to Python',
                'date_start' => '2023-07-10',
                'date_end' => '2023-07-12',
                'start_time' => '10:00',
                'end_time' => '14:00',
                'type' => 'virtual',
                'link' => 'https://www.introtopython.com',
                'location' => '',
                'description' => 'Learn the basics of programming in Python',
                'max_capacity' => '100',
                'capacity' => '100',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Financial Planning 101',
                'date_start' => '2023-08-05',
                'date_end' => '2023-08-05',
                'start_time' => '9:00',
                'end_time' => '11:00',
                'type' => 'physical',
                'link' => '',
                'location' => '456 Main Street, Suite 200, Anytown, USA',
                'description' => 'Learn the basics of financial planning and budgeting',
                'max_capacity' => '30',
                'capacity' => '30',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Effective Communication Skills',
                'date_start' => '2023-09-01',
                'date_end' => '2023-09-01',
                'start_time' => '13:00',
                'end_time' => '15:00',
                'type' => 'virtual',
                'link' => 'https://www.communication101.com',
                'location' => '',
                'description' => 'Learn how to communicate effectively in the workplace',
                'max_capacity' => '75',
                'capacity' => '75',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],








        ]);
        // CareerDevelopment::factory(10)->create();
    }
}
