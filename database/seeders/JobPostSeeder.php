<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_posts')->insert([
            [
            'title' => 'Software Engineer',
            'salary_lower' => 7000,
            'salary_upper' => 8000,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Firday',
            'description' => 'The software engineer is responsible for designing, developing, and maintaining software applications. They should have a strong understanding of programming languages such as Java, Python, or C++, along with knowledge of software development methodologies. Proficiency in problem-solving, code debugging, and collaborating with cross-functional teams is essential. Strong communication skills and the ability to write clean and efficient code are highly valued.',
            'company_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Graphic Designer',
            'salary_lower' => 3000,
            'salary_upper' => 3500,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Thursday',
            'description' => 'The graphic designer creates visual concepts and designs for various projects, including advertisements, marketing materials, websites, and product packaging. Proficiency in graphic design software such as Adobe Creative Suite is required. The ideal candidate should have a keen eye for aesthetics, a strong understanding of color theory and typography, and the ability to translate concepts into visually appealing designs. Strong creativity, attention to detail, and the ability to meet deadlines are crucial.',
            'company_id' => 1,
            'created_at' => now()->subMonth(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Financial Analyst',
            'salary_lower' => 4000,
            'salary_upper' => 6000,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'The financial analyst conducts financial research, analysis, and forecasting to support business decision-making. They should possess strong analytical skills and proficiency in financial modeling, data analysis, and Excel. Knowledge of financial principles, accounting practices, and experience with financial software and tools are essential. Excellent problem-solving abilities, attention to detail, and the ability to communicate complex financial information effectively are highly valued.',
            'company_id' => 1,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Sales Representative',
            'salary_lower' => 4500,
            'salary_upper' => 6500,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'The sales representative is responsible for promoting and selling products or services to customers. They should have excellent communication and negotiation skills, along with the ability to build and maintain relationships with clients. A results-oriented mindset, self-motivation, and the ability to meet sales targets are important. Strong product knowledge, market awareness, and the ability to adapt to changing customer needs are desirable traits.',
            'company_id' => 2,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Human Resources Manager',
            'salary_lower' => 3500,
            'salary_upper' => 5500,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Friday',
            'description' => 'The human resources manager oversees the overall HR functions within an organization. They should have a comprehensive understanding of HR policies, labor laws, and employee relations. Strong interpersonal and communication skills are necessary to manage employee engagement, recruitment, training, and performance management. Experience in developing HR strategies, promoting a positive work culture, and resolving complex HR issues is valued.',
            'company_id' => 3,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Marketing Manager',
            'salary_lower' => 4200,
            'salary_upper' => 6200,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'The marketing manager develops and implements marketing strategies to promote products or services and increase brand awareness. They should have a deep understanding of market research, target audience analysis, and digital marketing channels. Strong project management skills, creativity, and the ability to analyze marketing data are essential. Experience in campaign planning, brand management, and cross-functional collaboration is highly desirable.',
            'company_id' => 4,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Project Manager',
            'salary_lower' => 400,
            'salary_upper' => 500,
            'type' => 'Part-Time',
            'shift_start' => 'Saturday',
            'shift_end' => 'Sunday',
            'description' => 'The project manager leads and manages projects from initiation to completion. They should have excellent organizational and leadership skills, along with the ability to prioritize tasks, allocate resources effectively, and manage project budgets. Strong communication and stakeholder management skills are essential to ensure project objectives are met. Proficiency in project management methodologies, such as Agile or Waterfall, and experience with project management software are valued.',
            'company_id' => 1,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Customer Service Representative',
            'salary_lower' => 3800,
            'salary_upper' => 5800,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Friday',
            'description' => 'The customer service representative handles customer inquiries, complaints, and provides assistance and support to ensure a positive customer experience. They should have strong communication skills, both verbal and written, along with empathy and patience. Problem-solving abilities and the ability to remain calm under pressure are essential. Proficiency in using customer service software, multitasking, and maintaining accurate records are valued.',
            'company_id' => 5,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Data Analyst',
            'salary_lower' => 5000,
            'salary_upper' => 7000,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Friday',
            'description' => 'The data analyst collects, analyzes, and interprets large datasets to identify trends, patterns, and insights that inform business decision-making. They should have strong analytical and problem-solving skills, along with proficiency in data analysis tools such as SQL, Excel, or Python. Experience in data visualization and reporting is desirable. Attention to detail, critical thinking, and the ability to communicate complex data findings in a clear and concise manner are important.',
            'company_id' => 6,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Operations Manager',
            'salary_lower' => 5500,
            'salary_upper' => 7500,
            'type' => 'Full-time',
            'shift_start' => 'Monday',
            'shift_end' => 'Saturday',
            'description' => 'The operations manager oversees the day-to-day operations of an organization, ensuring efficiency, productivity, and adherence to processes and procedures. They should have strong leadership and managerial skills, along with the ability to analyze and improve operational processes. Knowledge of supply chain management, resource allocation, and budgeting is valued. Excellent problem-solving abilities, decision-making skills, and the ability to work collaboratively with cross-functional teams are important.',
            'company_id' => 7,
            'created_at' => now()->subYear(),
            'updated_at' => now(),
        ],
    ]);
    // JobPost::factory(10)->create();
    }
}
