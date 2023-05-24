<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Books;
use App\Models\BookDetails;
use App\Models\Category;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('is_ID');
        for($i=1; $i <= 20; $i++){
            Books::create([
                'id_book' => BookDetails::inRandomOrder()->first()->id_book,
                'id_category' => Category::inRandomOrder()->first()->id_category
            ]);
        }
    }
}