<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_evaluation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('university');
            $table->string('course_name');
            $table->string('course_number')->nullable();
            $table->string('program_degree_pursuing');
            $table->text('program_course_description')->nullable();
            $table->string('verified_pro_member')->nullable();
            $table->string('city_state_country');
            $table->text('program_course_long_description')->nullable();
            $table->text('hows_instructors')->nullable();
            $table->text('comments')->nullable();
            $table->string('followed_up_for_employment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_evaluation');
    }
}
