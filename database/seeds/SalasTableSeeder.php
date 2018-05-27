<?php

use App\Sala;
use Illuminate\Database\Seeder;

class SalasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Sala::truncate();

        // Incant_maxe Faker package. We can use several different locales for it, so
        // let's use the german locale to play with it.
        $faker = \Faker\Factory::create('es_ES');

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            Sala::create([
                'nombre' => "Sala " . $faker->randomNumber(1),
                'cant_max' => $faker->randomNumber(1),
            ]);
        }
    }
}
