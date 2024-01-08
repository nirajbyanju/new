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
        Schema::create('userdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('photo')->nullable();
            $table->string('bio')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('establishment')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('website')->nullable();
            $table->string('location')->nullable();
            $table->string('notification')->nullable();
            $table->timestamp('message')->nullable();
            $table->string('role')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userdetails');
    }
};
