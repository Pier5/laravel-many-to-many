<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $postTags = Tag::inRandomOrder()->limit(rand(1, 10))->get();

            $post->tags()->attach($postTags->pluck('id')->all());
        }
    }
}
