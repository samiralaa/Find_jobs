<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Software Engineering',
                'description' => 'Jobs related to software development, coding, and technology solutions.',
            ],
            [
                'title' => 'Marketing',
                'description' => 'Jobs in marketing, advertising, and digital marketing.',
            ],
            [
                'title' => 'Finance',
                'description' => 'Jobs in finance, accounting, and investment.',
            ],
            [
                'title' => 'Human Resources',
                'description' => 'Jobs in human resources, recruitment, and talent management.',
            ],
            [
                'title' => 'Sales',
                'description' => 'Jobs in sales, business development, and account management.',
            ],
            [
                'title' => 'Healthcare',
                'description' => 'Jobs in healthcare, nursing, and medical fields.',
            ],
            [
                'title' => 'Education',
                'description' => 'Jobs in education, teaching, and academic administration.',
            ],
            [
                'title' => 'Customer Service',
                'description' => 'Jobs in customer service, support, and client relations.',
            ],
            [
                'title' => 'Design',
                'description' => 'Jobs in graphic design, UX/UI design, and creative arts.',
            ],
            [
                'title' => 'Legal',
                'description' => 'Jobs in law, legal advice, and legal administration.',
            ],
            [
                'title' => 'Project Management',
                'description' => 'Jobs in project management and operations.',
            ],
            [
                'title' => 'Engineering',
                'description' => 'Jobs in civil, mechanical, and other engineering disciplines.',
            ],
            [
                'title' => 'Consulting',
                'description' => 'Jobs in management consulting and business strategy.',
            ],
            [
                'title' => 'Construction',
                'description' => 'Jobs in construction, architecture, and civil engineering.',
            ],
            [
                'title' => 'Public Relations',
                'description' => 'Jobs in public relations, communications, and corporate affairs.',
            ],
            [
                'title' => 'Information Technology',
                'description' => 'Jobs in IT support, system administration, and networking.',
            ],
            [
                'title' => 'Data Science',
                'description' => 'Jobs in data science, machine learning, and AI.',
            ],
            [
                'title' => 'Logistics and Supply Chain',
                'description' => 'Jobs in logistics, supply chain, and inventory management.',
            ],
            [
                'title' => 'Research and Development',
                'description' => 'Jobs in R&D and innovation across industries.',
            ],
        ];
        

        // Insert each category into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
