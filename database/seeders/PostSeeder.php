<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i<11; $i++){
            $post = new Post();

            $post->title = $faker->sentence(3);
            $post->content = $faker->text(500);
            $post->slug = $post->generateSlug($post->title);
            $post->cover_image = $faker->imageUrl(640, 480, 'animals', true);
            $post->save();
        }
    }
}
