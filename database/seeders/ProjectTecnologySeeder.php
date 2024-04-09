<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Tecnology;
use Faker\Generator as Faker;

class ProjectTecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = Project::all();
        $tecnologies = Tecnology::all()->pluck('id');

        foreach ($projects as $project) {
            $project->tecnologies()->sync($faker->randomElement($tecnologies, rand(1, 4), false));
        }
    }
}