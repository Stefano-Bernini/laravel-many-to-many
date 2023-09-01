<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['HTML', 'CSS', 'Javascript', 'JQuery', 'VueJS', 'Laravel', 'Symfony', 'SASS'];

        foreach($tags as $tag){
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->slug = Str::slug($tag, '-');

            $new_tag->save();
        }
    }
}
