<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $project = new Project();
            $project->name = $faker->words(3, true);
            $project->repo = $faker->url();
            $project->collaborators = $faker->randomDigit();
            $project->publishing_date = $faker->dateTime();
            $project->type = $faker->word();

            $project->save();
        }
    }
}