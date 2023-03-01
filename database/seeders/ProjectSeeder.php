<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
Use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newproject = new Project;
            $newproject->title = $faker->text(10);
            $newproject->data_progetto = $faker->date('Y_m_d');
            $newproject->difficoltà = $faker->randomDigit();
            $newproject->descrizione = $faker->paragraph();
            $newproject->slug = Str::slug($newproject->title, '-');


            $newproject->save();

        }
    }
}
