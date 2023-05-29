<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i <10 ; $i++) {
            Book::create([
                'image' => 'book.jpg',
                'title' => $faker->sentence(),
                'author' => $faker->name(),
                'publisher_id' => mt_rand(1, 10),
                'category_id' => mt_rand(1,4),
                'synopsis' => $faker->paragraph(),
                'year' => $faker->year()

            ]);
        }
    }
}
