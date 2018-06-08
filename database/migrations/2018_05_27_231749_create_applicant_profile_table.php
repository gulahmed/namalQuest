<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('father_name')->nullable(false);
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('applicant_nic')->nullable();
            $table->string('parent_nic')->nullable();
            $table->boolean('application_status')->default(0);
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')->on('users')->
            onDelete('cascade');
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
        Schema::dropIfExists('user_profile');
    }
}
