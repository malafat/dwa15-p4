<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(PropertiesTableSeeder::class);
        $this->call(RentersTableSeeder::class);
        $this->call(ContractsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
