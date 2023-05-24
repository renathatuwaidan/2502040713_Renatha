<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('is_ID');
        $genres = ['Action', 'Adventure', 'Comedy', 'Drama', 'Fantasy'];
        
        for($i = 1; $i <= 5; $i++){
            $x = 0;
            Category::create([
                'id_category' => $x++,
                'categoryName' => $faker->unique()->randomElement($genres)
            ]);
        };
    }
}
