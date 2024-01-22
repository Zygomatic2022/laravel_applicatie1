<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article= new \App\Models\Article([
            'name'=> 'Milk',
            'price'=> '1.5'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Bread',
            'price'=> '2'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Eggs',
            'price'=> '3'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Cheese',
            'price'=> '4'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Butter',
            'price'=> '5'
        ]);
        $article->save();


        $article= new \App\Models\Article([
            'name'=> 'Sausage',
            'price'=> '6'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Ham',
            'price'=> '7'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Chicken',
            'price'=> '8'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Beef',
            'price'=> '9'
        ]);
        $article->save();

        $article= new \App\Models\Article([
            'name'=> 'Pork',
            'price'=> '10'
        ]);
        $article->save();
    }

}
