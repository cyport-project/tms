<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillMstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_mst', function (Blueprint $table) {
          $table->string('skill_id',4)->unique()->comment('スキルID');
          $table->string('skill_category',10)->comment('カテゴリー ');
          $table->string('skill_name',20)->comment('スキル名');
          $table->timestamps();
          $table->integer('delete_flag')->comment('削除フラグ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_mst');
    }
}
