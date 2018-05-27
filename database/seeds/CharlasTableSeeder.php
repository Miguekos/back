<?php
use App\Charla;
use Illuminate\Database\Seeder;

class CharlasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Charla::truncate();

        // Initialize the Faker package. We can use several different locales for it, so
        // let's use the german locale to play with it.
        $faker = \Faker\Factory::create('es_ES');

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Charla::create([
                'nombre' => $faker->name,
                'fecha' => $faker->dateTime($max = 'now', $timezone = null),
                'sala_id' => $faker->randomNumber(1),
                'speaker_id' => $faker->randomNumber(1),
            ]);
        }
    }
}
