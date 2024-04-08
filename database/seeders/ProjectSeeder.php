<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Progetto 1',
                'description' => 'Descrizione del progetto 1.',
                'category' => 'Web Development',
                'url' => 'https://www.example.com/progetto1',
                'creation_date' => '2023-01-15',
                'status' => true,
                'note' => 'Note aggiuntive per il progetto 1.',
            ],
            [
                'title' => 'Progetto 2',
                'description' => 'Descrizione del progetto 2.',
                'category' => 'Mobile Development',
                'url' => 'https://www.example.com/progetto2',
                'creation_date' => '2023-03-22',
                'status' => false,
                'note' => 'Note aggiuntive per il progetto 2.',
            ],
            [
                'title' => 'Progetto 3',
                'description' => 'Descrizione del progetto 3.',
                'category' => 'Data Science',
                'url' => 'https://www.example.com/progetto3',
                'creation_date' => '2023-06-10',
                'status' => true,
                'note' => 'Note aggiuntive per il progetto 3.',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}