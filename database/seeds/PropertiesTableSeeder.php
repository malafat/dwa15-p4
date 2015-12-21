<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('properties')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'address' => '1234 First Ave',
        'city' => 'Town',
        'state' => 'Povince',
        'area' => '600',
        'beds' => '1',
        'baths' => '1',
        'notes' => 'blasgal'
      ]);
      DB::table('properties')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'address' => '200 Main Street',
        'city' => 'Town',
        'state' => 'Povince',
        'area' => '700',
        'beds' => '2',
        'baths' => '1',
        'notes' => 'blasgal'
      ]);
      DB::table('properties')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'address' => '3 Lost Way',
        'city' => 'Subtown',
        'state' => 'Povince',
        'area' => '1400',
        'beds' => '3',
        'baths' => '1',
        'notes' => 'blasgal'
      ]);
      DB::table('properties')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'address' => '2030 Supreme Street',
        'city' => 'Metropolis',
        'state' => 'North Territory',
        'area' => '1000',
        'beds' => '1',
        'baths' => '1',
        'notes' => ''
      ]);
    }
}
