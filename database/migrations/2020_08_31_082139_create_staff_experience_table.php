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
        Schema::create('create_staff_experience_table', function (Blueprint $table) {
            $table->s_id();
            $table->name();
            $table->industry();
            $table->phase();
            $table->pro_name();
            $table->pro_content();
            $table->notices();
            $table->start_period();
            $table->end_period();
            $table->content();
            $table->result();
            $table->mod_os();
            $table->DB_DC();
            $table->lang_tool();
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_staff_experience_table');
    }
}
