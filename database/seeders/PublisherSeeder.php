<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('is_ID');
        for($i=1; $i <= 10; $i++){
            Publisher::create([
                'id_publisher' =>$i,
                'publisherName' => $faker->company,
                'publisherEmail' => $faker->email,
                'publisherPhone' => $faker->phoneNumber,
                'publisherAddress' => $faker->address
            ]);
        }
    }
}
