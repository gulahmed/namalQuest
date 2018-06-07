<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantAcademicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_academic_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qualification')->nullable(false);
            $table->string('board')->nullable(false);
            $table->integer('year_of_passing');
            $table->string('roll_number');
            $table->integer('total_marks');
            $table->integer('obtained_marks');
            $table->text('intermediate_subjects')->nullable();
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('applicant_academic_details');
    }
}
