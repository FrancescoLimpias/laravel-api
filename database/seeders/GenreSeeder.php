<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{

    const genre_list = [
        "Action",
        "Adventure",
        "Animation",
        "Biography",
        "Comedy",
        "Crime",
        "Documentary",
        "Drama",
        "Family",
        "Fantasy",
        "Film Noir",
        "History",
        "Horror",
        "Music",
        "Musical",
        "Mystery",
        "Romance",
        "Sci-Fi",
        "Short",
        "Sport",
        "Superhero",
        "Thriller",
        "War",
        "Western"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (GenreSeeder::genre_list as $genre) {
            $newGenre = new Genre();
            $newGenre["name"] = $genre;
            $newGenre["description"] = fake()->text(255);
            $newGenre->save();
        }
    }
}
