<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread', function (Blueprint $table) {
            $table->increments('thread_id');
            $table->string('title',100);
            $table->string('message',1000);
            $table->string('s_id',10);
            $table->timestamps();
            $table->integer('delete_flag');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thread');
    }
}
