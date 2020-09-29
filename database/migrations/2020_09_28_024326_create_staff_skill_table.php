<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_skill', function (Blueprint $table) {
            $table->id()->comment('キー');
            $table->string('s_id',10)->comment('社員ID');
            $table->string('speciality',200)->nullable()->comment('得意分野');
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
        Schema::dropIfExists('staff_skill');
    }
}
