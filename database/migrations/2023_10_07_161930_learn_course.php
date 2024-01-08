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
        Schema::connection('learn')->create('course', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('outcomes')->nullable();
            $table->string('language', 255)->nullable();
            $table->unsignedBigInteger('category')->nullable();
            $table->longText('section')->nullable();
            $table->longText('requirements')->nullable();
            $table->double('price')->nullable();
            $table->boolean('discount_flag')->default(0);
            $table->integer('discounted_price')->nullable();
            $table->string('level', 50)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->string('video_url', 255)->nullable()->nullable();
            $table->integer('date_added')->nullable();
            $table->integer('last_modified')->nullable();
            $table->string('course_type', 255)->nullable();
            $table->boolean('is_top_course')->default(0);
            $table->boolean('is_admin')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('course_overview_provider', 255)->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();
            $table->boolean('is_free_course')->nullable();
            $table->boolean('multi_instructor')->default(0);
            $table->string('creator')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('learn')->dropIfExists('course');
    }
};
