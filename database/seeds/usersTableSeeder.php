<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB:: insert(' INSERT INTO users (id,s_id,password,mode,delete_flag) VALUES(3,"admin","$2y$10$Es75je9EzSibX6axtD7/9O9dMTFWTk94yJH2C9EYXRU2m6f7/3kGy","9",0)');
    }
}
