<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->string('address');
            $table->string('email');
            $table->bigInteger('mobile');
            $table->date('dob');
            $table->string('nic');
            $table->string('cv');

            $table->string('position');
            $table->string('lastCompany');
            $table->string('lastPosition');
            $table->string('lastSalary');
            $table->string('experience');
            $table->string('expertiseAreas');

            $table->string('bankAccNo');
            $table->string('nameAccountHolder');
            $table->string('bankName');
            $table->string('branch');

            $table->boolean('agreement');
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
        Schema::dropIfExists('applicants');
    }
}
