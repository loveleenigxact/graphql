<?php

namespace Database\Seeders;
use App\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::truncate();
        \App\Models\Article::unguard();

        $faker = \Faker\Factory::create();


         \App\Models\Article::create([
            'name'   => $faker->name,
            'is_completed' => '1',
            'deadline_date'   => '2023-06-30 14:32:56',
        ]);

        for ($i = 0; $i < 10; ++$i) {
            \App\Models\Article::create([
                'name'   => $faker->name,
            'is_completed' => '1',
            'deadline_date'   => '2023-06-30 14:32:56',
            ]);
        }

        
    }
}
