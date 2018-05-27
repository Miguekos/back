<?php

use App\Speaker;
use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Speaker::truncate();

        // Initialize the Faker package. We can use several different locales for it, so
        // let's use the german locale to play with it.
        $faker = \Faker\Factory::create('es_ES');

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            Speaker::create([
                'nombre' => $faker->name,
            ]);
        }
    }
}
