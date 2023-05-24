<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\BookDetails;

class BooksDetailSeeder extends Seeder
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
            BookDetails::create([
                'id_book' => $i,
                'id_publisher' => $faker->numberBetween(1, 10),
                'bookImage' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-business-leadership-book-cover-design-template-dce2f5568638ad4643ccb9e725e5d6ff_screen.jpg?ts=1637017516',
                'bookTitle' => $faker->sentence(4),
                'bookAuthor' => $faker->name,
                'bookYear' => $faker->year,
                'bookSynopsis' => $faker->paragraph
            ]);
        }
    }
}
