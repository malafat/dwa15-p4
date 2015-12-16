<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('renters', function(Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        $table->string('first_name');
        $table->string('last_name');
        $table->char('phone_number', 10);
        $table->string('email');
        $table->text('notes');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('renters');
    }
}
