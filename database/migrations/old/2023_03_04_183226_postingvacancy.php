<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('Postingvacancy', function (Blueprint $table) {
            $table->id('id');
            $table->string('nameofcompany');
            $table->string('position');
            $table->string('categoryofvacancy');
            $table->string('phonenumber');
            $table->string('website');
            $table->string('emailid');
            $table->string('publishdate');
            $table->string('dateline');
            $table->string('workingplace');
            $table->string('jobstypes');
            $table->string('jobslevel');
            $table->string('numberofvacancy');
            $table->string('uploadcompanylogo');
            $table->string('tags');
            $table->string('educationrequirement');
            $table->string('experiencerequirment');
            $table->string('salary');
            $table->LongText('descriptions');
            $table->string('views')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Postingvacancy');
    }
};
