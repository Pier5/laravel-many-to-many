<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'type' => 'Politica',
                'description' => 'Approfondimento sulla politica italiana ed estera'
            ],
            [
                'type' => 'Attualità',
                'description' => 'Approfondimento sull\'attualità mondiale'
            ],
            [
                'type' => 'Sport',
                'description' => 'Approfondimento su tutti gli sport'
            ],
            [
                'type' => 'Informatica',
                'description' => 'Approfondimento sul mondo tech'
            ],
            [
                'type' => 'Cronaca',
                'description' => 'Approfondimento sulla cronaca mondiale'
            ],
            [
                'type' => 'Gossip',
                'description' => 'Approfondimento curato da Alfonso Signorini'
            ],
            [
                'type' => 'Economia',
                'description' => 'Approfondimento sulla situazione economica mondiale'
            ],
        ];

        foreach ($categories as $category ) {
            Category::create($category);
        }
    }
}
