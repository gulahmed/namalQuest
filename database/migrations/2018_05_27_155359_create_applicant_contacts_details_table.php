<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantContactsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_contacts_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('applicant_mobile')->nullable();
            $table->string('parent_mobile');
            $table->text('postal_address');
            $table->string('permanent_same_as_current_address');
            $table->text('permenant_address');
            $table->string('district');
            $table->string('domicile_province');
            $table->string('country');
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
        Schema::dropIfExists('user_contacts_details');
    }
}
