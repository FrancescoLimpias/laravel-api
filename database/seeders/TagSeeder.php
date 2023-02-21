<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    const tags_list = [
        "movies",
        "movie",
        "film",
        "cinema",
        "films",
        "hollywood",
        "actor",
        "love",
        "s",
        "art",
        "cinematography",
        "actress",
        "netflix",
        "moviescenes",
        "music",
        "filmmaking",
        "horror",
        "instagood",
        "bollywood",
        "movienight",
        "instagram",
        "photography",
        "comedy",
        "cinephile",
        "cine",
        "tv",
        "director",
        "horrormovies",
        "drama",
        "filmmaker"
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (TagSeeder::tags_list as $tag) {
            $newTag = new Tag();
            $newTag["name"] = $tag;
            $newTag["description"] = fake()->text(255);
            $newTag->save();
        }
    }
}
