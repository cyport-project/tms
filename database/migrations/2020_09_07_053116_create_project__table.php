<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->string('cotent');
            $table->string('pro_name',50);
            $table->string('pro_content',100);
            $table->string('e_user');
            $table->date('start_period');
            $table->date('end_period');
            $table->timestamps();
            $table->string('delete_flag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_');
    }
}
