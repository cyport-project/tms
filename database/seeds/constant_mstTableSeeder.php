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
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01001","システム開発部","部・課","2","2","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01001","IOT開発部","部・課","3","3","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","中学卒","学歴","1","1","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","高校卒","学歴","2","2","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","高専卒","学歴","3","3","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","短大卒","学歴","4","4","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","専門学校卒","学歴","5","5","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","大学卒","学歴","6","6","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01002","大学院卒","学歴","7","7","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01003","在籍","就業区分","1","1","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01003","退職","就業区分","2","9","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01003","休職中","就業区分","3","2","0")');               
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01401","~1","年数","1","1","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01401","2~5","年数","2","2","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01401","5~10","年数","3","3","0")');
        DB:: insert(' INSERT INTO constant_mst (constant_id,name,notice,display_order,value,delete_flag) VALUES("01401","10~","年数","4","4","0")');

    }
}
