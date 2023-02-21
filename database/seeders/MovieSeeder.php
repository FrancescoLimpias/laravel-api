<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory()->count(100)->make()->each(function(Movie $movie){
            
            // Genre association
            $genre = Genre::inRandomOrder()->first();
            $movie->genre()->associate($genre);
            $movie->save();

        });
    }
}
