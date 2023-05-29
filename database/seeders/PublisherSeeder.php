<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10 ; $i++) {
            Publisher::create([
                'logo' => 'logopublisher.jpg',
                'name' => $faker->company(),
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email()
            ]);
        }
    }
}
