<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffCertificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_certification', function (Blueprint $table) {
            $table->string('s_id',14);
            $table->string('certification_id',5);
            $table->date('certification_date');
            $table->string('notices',200)-> nullable();
            $table->integer('delete_flag')-> default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_certification');
    }
}
