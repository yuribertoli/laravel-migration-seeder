<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();

            $table->string('trip_title', 80)->unique();            //title must be unique (unique())
            $table->decimal('price', 8, 2);
            $table->date('starting_date');
            $table->text('description');
            $table->string('destination_country', 40);
            $table->string('departure_country', 40);
            $table->string('destination_city', 40);
            $table->string('departure_city', 40);
            $table->string('type', 20)->nullable();                //relax, adventure, group, cultural, ecc... puo' essere vuoto (nullable())
            $table->unsignedTinyInteger('trip_lenght');            //in days, only positive numbers (unsigned)
            $table->unsignedTinyInteger('people');
   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
