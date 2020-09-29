<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->string('s_id',10) -> unique();
            $table->string('lname',10);
            $table->string('lname_j',14);
            $table->string('fname',14);
            $table->string('fname_j',20);
            $table->date('b_date');
            $table->integer('sex');
            $table->string('tell_num',13);
            $table->string('emergency_contact',13);
            $table->string('mail_ad',30);
            $table->string('educational',1);
            $table->string('address',100);
            $table->string('address_2',100);
            $table->string('zip',8);
            $table->string('phone',13);
            $table->string('station',70);
            $table->string('department',1);
            $table->integer('expense');
            $table->string('employment_category',1);
            $table->string('delete_flag',1);
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
        Schema::dropIfExists('staff');
    }
}
