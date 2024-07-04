<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
         for($i=0; $i<10; $i++){

         $comic = new Comic();
         $comic->title = $faker->sentence(3);
         $comic->description = $faker->sentence(10);
         $comic->thumb = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/1920/1080";
         $comic->price = $faker->randomFloat(2, 0, 100);
         $comic->save();
        }
    }
}