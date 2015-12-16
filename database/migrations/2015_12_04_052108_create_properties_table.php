<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function(Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('address');
          $table->string('city');
          $table->string('state');
          $table->integer('area');
          $table->integer('beds');
          $table->integer('baths');
          $table->string('notes');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
