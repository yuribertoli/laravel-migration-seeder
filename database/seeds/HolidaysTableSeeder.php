<?php

use Faker\Generator as Faker;
use App\Holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<100; $i++){

            $holiday = new Holiday();
            $holiday->trip_title = $faker->sentence(4); //random sentence of 6 words
            $holiday->reference_id= $faker->randomNumber(5, true) . $faker->hexColor(); //exactly (true) 5 random number + random hex color
            $holiday->price = $faker->randomNumber(5, false);; //up to (false) 5 random number
            $holiday->starting_date = $faker->dateTimeThisYear('+9 months'); //a date somewhere in this year, with an upper bound of +9 months
            $holiday->description = $faker->sentence(20); //random sentence of 20 words
            $holiday->destination_country = $faker->word(); 
            $holiday->departure_country = $faker->word(); /* $faker->country(); //Generate a random country *//* $faker->countryISOAlpha3(); //Generate a random three-letter country code string */
            $holiday->destination_city = $faker->city(); //Generate a random city
            $holiday->departure_city = $faker->city(); //Generate a random city
            $holiday->type = $faker->word();  //Generate a random word               
            $holiday->trip_lenght = $faker->randomNumber(2, false);   //up to (false) 2 random number         
            $holiday->people = $faker->randomNumber(2, false);  //up to (false) 2 random number
            $holiday->save();
        }
    
    }
}
