<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantTestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_test_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('test_name');
            $table->string('test_roll_number');
            $table->integer('test_total_marks');
            $table->integer('test_obtained_marks');
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
        Schema::dropIfExists('applicant_test_details');
    }
}
