<?php

use Illuminate\Database\Seeder;

class constant_mstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01001","営業部","部・課","1","1","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","大学","学歴","1","1","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01003","在籍","就業区分","1","1","0")');
    }
}
