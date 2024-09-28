<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $numberOfComics = 10;

        for ($i = 0; $i < $numberOfComics; $i++) {
            $new_comic = new Comic();
            
            $new_comic->title = $faker->sentence(3); 
            $new_comic->description = $faker->paragraph(5); 
            $new_comic->thumb = $faker->imageUrl(360, 360, 'comics', true); 
            $new_comic->price = $faker->randomFloat(2, 1, 100); 
            $new_comic->series = $faker->word(); 
            $new_comic->sale_date = $faker->date(); 
            $new_comic->type = $faker->randomElement(['comic book', 'graphic novel']); 
            $new_comic->artists = json_encode($faker->words(5)); 

            $new_comic->save();
        }
    }
}