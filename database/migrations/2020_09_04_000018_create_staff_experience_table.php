<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_experience', function (Blueprint $table) {
            $table->id();  //経験ID
            $table->string('s_id',10)->comment('社員ID');    //社員ID
            $table->string('pro_id',10)->nullable()->comment('プロジェクトID');  //プロジェクトID
            $table->date('start_period')->comment('開始期間'); //開始期間
            $table->date('end_period')->nullable()->comment('終了期間');   //終了期間
            $table->string('industry',50)->comment('業種');  //業種
            $table->string('pro_name',50)->comment('プロジェクト名'); //プロジェクト名
            $table->text('pro_content',100)->comment('プロジェクト概要');  //プロジェクト概要
            $table->text('content',300)->comment('業務内容');  //業務内容
            $table->string('mod_os',100)->comment('機種・OS'); //機種・OS
            $table->string('db_dc',100)->comment('DB/DC');  //DB/DC
            $table->string('lang_tool',100)->comment('言語・ツール');//言語・ツール
            $table->string('rd_p',1)->default(0)->comment('要件定義');//要件定義
            $table->string('bd_p',1)->default(0)->comment('基本設計');//基本設計
            $table->string('dd_p',1)->default(0)->comment('詳細設計');//詳細設計
            $table->string('pg_p',1)->default(0)->comment('開発・テスト');//開発・テスト
            $table->string('el_p',1)->default(0)->comment('評価');//評価
            $table->string('mt_p',1)->default(0)->comment('保守');//保守
            $table->string('op_p',1)->default(0)->comment('運用');//運用
            $table->timestamps();
            $table->string('delete_flag',1)->default(0);//削除フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_experience');
    }
}
