<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstantMstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constant_mst', function (Blueprint $table) {
            $table->string('constant_id',5);
            $table->string('name',20);
            $table->string('notice',40);
            $table->integer('display_order');
            $table->integer('value');
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
        Schema::dropIfExists('constant_mst');
    }
}
