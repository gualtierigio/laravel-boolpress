<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++){

            $newActor = new Actor();

            $newActor->name = $faker->name();

            $newActor->save();

        }
    }
}
