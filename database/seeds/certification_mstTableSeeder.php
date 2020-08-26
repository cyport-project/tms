<?php

use Illuminate\Database\Seeder;

class certification_mstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB:: insert(' INSERT INTO certification_mst (key1,value1,key2,value2,delete_flag) VALUES("01","IT技術者全般","01001","ITパスポート","0")');
        DB:: insert(' INSERT INTO certification_mst (key1,value1,key2,value2,delete_flag) VALUES("01","IT技術者全般","01002","基本情報処理技術者","0")');
        DB:: insert(' INSERT INTO certification_mst (key1,value1,key2,value2,delete_flag) VALUES("02","システム設計・管理者","02001","応用情報技術者","0")');
        DB:: insert(' INSERT INTO certification_mst (key1,value1,key2,value2,delete_flag) VALUES("02","システム設計・管理者","02002","情報セキュリティスペシャリスト","0")');
    }
}
