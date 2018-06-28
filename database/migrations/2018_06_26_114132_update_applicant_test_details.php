<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateApplicantTestDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicant_test_details', function (Blueprint $table) {
            $table->string('test_name')->nullable()->change();
            $table->string('test_roll_number')->nullable()->change();
            $table->integer('test_total_marks')->nullable()->change();
            $table->integer('test_obtained_marks')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applicant_test_details', function (Blueprint $table) {
            //
        });
    }
}
