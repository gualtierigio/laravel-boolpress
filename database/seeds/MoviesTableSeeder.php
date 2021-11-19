<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Movies;
use App\Models\Category;
use Faker\Generator as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $category_ids = Category::pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++){

            $newMovie = new Movies();

            $newMovie->title = $faker->words(3, true);
            $newMovie->description = $faker->paragraph(8, true);
            $newMovie->director = $faker->name();

            $newMovie->category_id = Arr::random($category_ids);

            $newMovie->save();
        }
    }
}
