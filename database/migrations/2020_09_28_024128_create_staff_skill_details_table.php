<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffSkillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_skill_details', function (Blueprint $table) {
            $table->id()->comment('経験ID');
            $table->string('s_id',10)->comment('社員ID');
            $table->string('skill_id',4)->comment('スキル');
            $table->string('years',3)->comment('経験年数');
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
        Schema::dropIfExists('staff_skill_details');
    }
}
