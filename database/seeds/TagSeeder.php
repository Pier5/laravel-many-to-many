<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Economia', 'Sport', 'Basket', 'Calcio', 'Dinamo Sassari', 'David Cronenberg', 'Food', 'Viaggi', 'Giappone', 'USA'];

        foreach ($tags as $tag ) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag)
            ]);
        }
    }
}
