<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('entries', function ($table) {
        $table->increments('id');
        $table->string('title'); // textbox
        $table->text('content'); // textarea
        $table->float('price'); // textbox
        $table->enum('currency', ['INR', 'USD']); // Radio
        $table->enum('location', ['Dwarka', 'Rajouri Garden', 'Saket', 'Janak Puri']); // Select
        $table->string('audience'); // checkbox - kids, teens, adults 
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
      Schema::drop('entries');
    }
}
