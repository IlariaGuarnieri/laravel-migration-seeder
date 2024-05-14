<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    // passo nuova istanza faker come parametro di run

    public function run(Faker $faker): void
    {
        // qui ho scritto 75 ma ho 100 risultati perche prima di 75 avevo 25, non ho poi fatto il refresh e ho fatto il db:seed che somma
        for($i = 0; $i < 75; $i++){
            $new_train= new Train();
            // true crea stringa, se non metto true crea un array, 1 da una parola
            $new_train->company = $faker->words(1, true);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numerify('RE-####');
            // randomDigitNot numero random da 0 a 9, con il not escludo lo 0
            $new_train->train_carriages = $faker->randomDigitNot(0);
            $new_train->in_time = $faker->boolean();
            $new_train->minutes_late = $faker->randomDigit();
            $new_train->is_cancelled = $faker->boolean();

            // effettuo insert nel db
            $new_train->save();

        }
    }
}
