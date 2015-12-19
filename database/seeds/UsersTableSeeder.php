<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'Jill',
          'password' => Hash::make('password'),
          'email' => 'jill@harvard.edu'
        ]);
    }
}
