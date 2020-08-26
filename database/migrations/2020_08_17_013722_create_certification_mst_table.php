<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationMstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_mst', function (Blueprint $table) {
            $table->string('key1',2);
            $table->string('value1',40);
            $table->string('key2',5);
            $table->string('value2',40);
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
        Schema::dropIfExists('certification_mst');
    }
}
