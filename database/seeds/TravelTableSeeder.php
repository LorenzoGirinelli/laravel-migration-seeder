<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_travel = new Travel();
            $new_travel->start_travel = $faker->dateTime();
            $new_travel->destination = $faker->city();
            $new_travel->airline = $faker->company();
            $new_travel->price = rand(25,800);
            $new_travel->save();
        }
    }
}
