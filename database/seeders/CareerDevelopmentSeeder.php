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
                'title' => 'Leadership Accelerator Program',
                'date_start' => '2022-01-21',
                'date_end' => '2023-01-20',
                'start_time' => '11:00',
                'end_time' => '13:00',
                'type' => 'physical',
                'link' => '',
                'location' => 'Lot 22,Bangunan Thai Ku La, Jalan Hantu Kecil, Wangsa Maju, 55500 Kuala Lumpur',
                'description' => 'This program focuses on developing essential leadership skills such as strategic thinking, decision-making, and effective communication. Participants gain hands-on experience and mentorship to accelerate their career growth and assume leadership roles.',
                'max_capacity' => '200',
                'capacity' => '100',
                'image' => 'app/storage/images/cd1.jpg',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Technical Skills Bootcamp',
                'date_start' => '2022-02-23',
                'date_end' => '2023-02-24',
                'start_time' => '11:00',
                'end_time' => '13:00',
                'type' => 'physical',
                'link' => '',
                'location' => 'Lot 11,Freestyle Building , Jalan Besar, Setapak, 54400 Kuala Lumpur',
                'description' => 'Designed for individuals in technical fields, this intensive program enhances technical proficiency in areas like programming, data analysis, or cybersecurity. Participants receive specialized training, practical projects, and exposure to the latest industry tools and techniques.',
                'max_capacity' => '200',
                'capacity' => '200',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Global Mobility Program',
                'date_start' => '2022-08-02',
                'date_end' => '2023-08-02',
                'start_time' => '11:00',
                'end_time' => '13:00',
                'type' => 'virtual',
                'link' => 'https://www.crushonjob.com',
                'location' => '',
                'description' => 'This program provides employees with opportunities to work in different locations around the world. It aims to broaden their cultural understanding, enhance adaptability, and develop global perspectives, which are increasingly important in todays interconnected business landscape.',
                'max_capacity' => '200',
                'capacity' => '200',
                'image' => 'app/storage/images/cd3.jpg',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Skills Exchange Program',
                'date_start' => '2023-06-15',
                'date_end' => '2023-06-15',
                'start_time' => '14:00',
                'end_time' => '16:00',
                'type' => 'physical',
                'link' => '',
                'location' => '123 Main Street, Suite 100, Anytown, USA',
                'description' => 'This initiative enables employees to gain exposure to different departments or functions within an organization. It helps individuals develop a diverse skill set, broaden their understanding of the business, and foster collaboration across teams.',
                'max_capacity' => '50',
                'capacity' => '50',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Coding Bootcamp',
                'date_start' => '2023-07-10',
                'date_end' => '2023-07-12',
                'start_time' => '10:00',
                'end_time' => '14:00',
                'type' => 'virtual',
                'link' => 'https://www.introtopython.com',
                'location' => '',
                'description' => 'This intensive program offers hands-on training in programming languages, software development methodologies, and industry best practices. It equips participants with the skills and knowledge needed to excel as programmers and jumpstart their careers in software development.',
                'max_capacity' => '100',
                'capacity' => '100',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Hackathon Series',
                'date_start' => '2023-06-15',
                'date_end' => '2023-06-15',
                'start_time' => '14:00',
                'end_time' => '16:00',
                'type' => 'physical',
                'link' => '',
                'location' => '123 Main Street, Suite 100, Anytown, USA',
                'description' => 'Hackathons provide programmers with opportunities to collaborate, solve real-world problems, and showcase their coding skills. These events encourage innovation, teamwork, and the chance to network with industry professionals, potential employers, and fellow developers.',
                'max_capacity' => '50',
                'capacity' => '50',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Open Source Contributions Program',
                'date_start' => '2023-07-10',
                'date_end' => '2023-07-12',
                'start_time' => '10:00',
                'end_time' => '14:00',
                'type' => 'virtual',
                'link' => 'https://www.introtopython.com',
                'location' => '',
                'description' => 'This program encourages programmers to contribute to open-source projects. Participants gain valuable experience, build a portfolio of work, and establish a reputation within the programming community. It can lead to job opportunities and collaboration with industry leaders.',
                'max_capacity' => '100',
                'capacity' => '100',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Design Thinking Workshop',
                'date_start' => '2023-08-05',
                'date_end' => '2023-08-05',
                'start_time' => '9:00',
                'end_time' => '11:00',
                'type' => 'physical',
                'link' => '',
                'location' => '456 Main Street, Suite 200, Anytown, USA',
                'description' => 'This program introduces designers to the principles and methodologies of design thinking. Participants learn to approach problem-solving from a user-centered perspective, enhance their creativity, and develop skills in ideation, prototyping, and user testing.',
                'max_capacity' => '30',
                'capacity' => '30',
                'image' => 'app/storage/images/cd2.png',
                'company_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UX/UI Design Bootcamp',
                'date_start' => '2023-09-01',
                'date_end' => '2023-09-01',
                'start_time' => '13:00',
                'end_time' => '15:00',
                'type' => 'virtual',
                'link' => 'https://www.communication101.com',
                'location' => '',
                'description' => 'This intensive program focuses on user experience (UX) and user interface (UI) design. Participants learn to create intuitive and visually appealing digital interfaces, conduct user research, and apply design principles to enhance user satisfaction and engagement.',
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
