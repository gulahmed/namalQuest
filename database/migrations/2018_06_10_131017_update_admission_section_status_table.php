<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAdmissionSectionStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('admission_section_status', function (Blueprint $table) {
          $table->string('profile_details_status')->nullable()->change();;
          $table->string('contacts_details_status')->nullable()->change();;
          $table->string('academic_details_status')->nullable()->change();;
          $table->string('program_details_status')->nullable()->change();;
          
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
