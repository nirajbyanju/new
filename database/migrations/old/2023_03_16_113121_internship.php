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
        Schema::create('internship', function (Blueprint $table) {
            $table->id('id');
            $table->string('tittleofopportunity');
            $table->string('uploadlogo');
            $table->string('uploadcover');
            $table->string('tags');
            $table->string('sponsorby');
            $table->string('position');
            $table->string('categoryofvacancy');
            $table->string('website');
            $table->string('emailid');
            $table->string('phonenumber');
            $table->string('publishdate');
            $table->string('dateline');
            $table->string('location');
            $table->string('fundingtype');
            $table->string('forwhom');
            $table->string('numberofopportunity');
            $table->string('experiencerequirment');
            $table->string('educationrequirement');
            $table->string('subtopic');
            $table->LongText('descriptions');
            $table->string('type')->default('internship');
            $table->integer('views')->default('101');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship');
    }
};
