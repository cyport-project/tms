<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(constant_mstTableSeeder::class);
        $this->call(usersTableSeeder::class);
        $this->call(certification_mstTableSeeder::class);
    }
}
