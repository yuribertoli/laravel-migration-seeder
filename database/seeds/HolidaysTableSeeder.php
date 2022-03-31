<?php

use App\Holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holiday = new Holiday();
        
        $holiday->trip_title = 'Working on the cotton fields';
        $holiday->reference_id= 'TG3521HJ';
        $holiday->price = 2000;
        $holiday->starting_date = '2023/01/01';
        $holiday->description = 'Feel like a slave working in a cotton field!';
        $holiday->destination_country = 'USA';
        $holiday->departure_country = 'Italy';
        $holiday->destination_city = 'Dallas';
        $holiday->departure_city = 'Rome';
        $holiday->type = 'Slavery';                
        $holiday->trip_lenght = 14;            
        $holiday->people = 1;

        $holiday->save();
    }
}
