<?php

use Illuminate\Database\Seeder;

class RentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('renters')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'phone_number' => '1231231231',
        'email' => 'js@jsmail.com',
        'notes' => 'blasgal'
      ]);
      DB::table('renters')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Jamal',
        'last_name' => 'Jones',
        'phone_number' => '3465231231',
        'email' => 'jamjam@kiki.go',
        'notes' => 'blasgal'
      ]);
      DB::table('renters')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Paul',
        'last_name' => 'Erdos',
        'phone_number' => '4325552345',
        'email' => 'paul@SF.com',
        'notes' => 'weird guy'
      ]);
    }
}
