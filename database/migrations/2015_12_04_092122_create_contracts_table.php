<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contracts', function(Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        $table->integer('property_id')->unsigned();
        $table->foreign('property_id')->references('id')->on('properties');
        $table->integer('renter_id')->unsigned();
        $table->foreign('renter_id')->references('id')->on('renters');
        $table->date('term_start');
        $table->date('term_end');
        $table->integer('rent');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contracts');
    }
}
