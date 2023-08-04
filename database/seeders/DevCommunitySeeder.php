<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Bytebuilder;
use App\Models\Project;
use App\Models\Team;
use App\Models\TeamXBytebuilder;
use App\Models\FinancementRequest;
use App\Models\FinancersXRequest;
use App\Models\Task;
use App\Models\MakingTaskPreposition;
    
class DevCommunitySeeder extends Seeder
{
    public function run()
    {
        // Insert category data
        Category::create([
            [
                'category_name' => 'Frontend Developer',
                'category_description' => 'Specializes in frontend web development',
            ],
            [
                'category_name' => 'Backend Developer',
                'category_description' => 'Specializes in backend web development',
            ],
            // Add more category data as needed
        ]);

        // Insert bytebuilder data
        Bytebuilder::create([
            [
                'bytebuilder_name' => 'John Doe',
                'bytebuilder_prename' => 'John',
                'bytebuilder_email' => 'john@example.com',
                'bytebuilder_password' => bcrypt('password'),
                'bytebuilder_category' => 1,
                'bytebuilder_city' => 'New York',
                'bytebuilder_country' => 'USA',
                'bytebuilder_birthdate' => '1990-01-01',
            ],
            [
                'bytebuilder_name' => 'Jane Smith',
                'bytebuilder_prename' => 'Jane',
                'bytebuilder_email' => 'jane@example.com',
                'bytebuilder_password' => bcrypt('password'),
                'bytebuilder_category' => 2,
                'bytebuilder_city' => 'San Francisco',
                'bytebuilder_country' => 'USA',
                'bytebuilder_birthdate' => '1992-03-15',
            ],
            // Add more bytebuilder data as needed
        ]);

        // Insert project data
        Project::create([
            [
                'project_name' => 'E-commerce Website',
                'project_category' => 1,
                'project_creator_id' => Bytebuilder::inRandomOrder()->first()->id,
                'project_description' => 'A project to build an online store using modern frontend technologies.',
                'public' => true,
            ],
            [
                'project_name' => 'API Development',
                'project_category' => 2,
                'project_creator_id' => Bytebuilder::inRandomOrder()->first()->id,
                'project_description' => 'Building a RESTful API for a mobile application.',
                'public' => false,
            ],
            // Add more project data as needed
        ]);

        // Insert team data
        Team::create([
            [
                'team_name' => 'Frontend Team',
                'team_category' => 1,
                'team_creator' => Bytebuilder::inRandomOrder()->first()->id,
                'team_description' => 'A team focused on frontend development projects.',
            ],
            [
                'team_name' => 'Backend Team',
                'team_category' => 2,
                'team_creator' => Bytebuilder::inRandomOrder()->first()->id,
                'team_description' => 'A team specializing in backend development and server-side technologies.',
            ],
            // Add more team data as needed
        ]);

        // Insert team_x_bytebuilder data
        TeamXBytebuilder::create([
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'team_id' => Team::inRandomOrder()->first()->id,
            ],
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'team_id' => Team::inRandomOrder()->first()->id,
            ],
            // Add more team_x_bytebuilder data as needed
        ]);

        // Insert financement_request data
        FinancementRequest::create([
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'project_id' => 1,
                'financement_request_name' => 'Website Design',
                'financement_request_description' => 'Seeking financial support for the design phase of the website.',
                'financement_request_category' => 1,
            ],
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'project_id' => 2,
                'financement_request_name' => 'Database Optimization',
                'financement_request_description' => 'In need of funding to optimize the database performance.',
                'financement_request_category' => 2,
            ],
            // Add more financement_request data as needed
        ]);

        // Insert financers_x_request data
        FinancersXRequest::create([
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'financement_request_id' => 1,
                'financement_proposition_description' => 'I can provide financial support for the website design.',
                'financement_request_accepted' => true,
            ],
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'financement_request_id' => 2,
                'financement_proposition_description' => 'I\'m interested in investing in the database optimization project.',
                'financement_request_accepted' => false,
            ],
            // Add more financers_x_request data as needed
        ]);

        // Insert task data
        Task::create([
            [
                'task_title' => 'Implement Home Page',
                'task_category' => 1,
                'task_creator_id' => Bytebuilder::inRandomOrder()->first()->id,
                'task_description' => 'Develop the frontend code for the home page of the website.',
                'public' => true,
            ],
            [
                'task_title' => 'Create User Authentication API',
                'task_category' => 2,
                'task_creator_id' => Bytebuilder::inRandomOrder()->first()->id,
                'task_description' => 'Build a RESTful API for user authentication and authorization.',
                'public' => false,
            ],
            // Add more task data as needed
        ]);

        // Insert making_task_preposition data
        MakingTaskPreposition::create([
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'task_id' => 1,
                'making_task_preposition_description' => 'I can work on the frontend implementation of the home page.',
                'making_task_preposition_accepted' => true,
            ],
            [
                'bytebuilder_id' => Bytebuilder::inRandomOrder()->first()->id,
                'task_id' => 2,
                'making_task_preposition_description' => 'I have experience in building authentication APIs and can handle this task.',
                'making_task_preposition_accepted' => false,
            ],
            // Add more making_task_preposition data as needed
        ]);
    }
}