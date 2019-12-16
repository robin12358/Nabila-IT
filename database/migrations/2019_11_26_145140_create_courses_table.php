<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('course_id');
            $table->string('title', 100);
            $table->text('details', 65535)->nullable();
            $table->string('subject_name',25);
            $table->string('course_type',25);
            $table->string('course_duration_munth',25);
            $table->string('course_duration_hour',25);
            $table->text('trainer_name', 125)->nullable();
            $table->text('trainer_image')->nullable();
            $table->text('course_fee');
            $table->text('course_image');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('courses');
    }
}
