<?php

use Illuminate\Database\Seeder;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contracts')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'property_id' => '3',
        'renter_id' => '1',
        'term_start' => Carbon\Carbon::create(2015,1,1,0,0,0),
        'term_end' => Carbon\Carbon::create(2016,1,1,0,0,0),
        'rent' => '800'
      ]);
      DB::table('contracts')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'property_id' => '3',
        'renter_id' => '2',
        'term_start' => Carbon\Carbon::create(2016,1,1,0,0,0),
        'term_end' => Carbon\Carbon::create(2017,1,1,0,0,0),
        'rent' => '600'
      ]);
      DB::table('contracts')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'property_id' => '2',
        'renter_id' => '2',
        'term_start' => Carbon\Carbon::create(2014,1,1,0,0,0)->toDateString(),
        'term_end' => Carbon\Carbon::create(2015,1,1,0,0,0)->toDateString(),
        'rent' => '600'
      ]);

    }
}
