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
        Schema::connection('learn')->create('learn_lesson', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('duration', 255)->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->string('lesson_type', 255)->nullable();
            $table->string('video_url', 255)->nullable();
            $table->string('video_file', 255)->nullable();
            $table->string('document_type', 255)->nullable();
            $table->string('document_upload', 255)->nullable();
            $table->string('iframe_upload', 255)->nullable();
            $table->string('summary', 255)->nullable();
            $table->datetime('date_added')->nullable();
            $table->datetime('last_modified')->nullable();
            $table->integer('is_free')->default(0);
            $table->integer('order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('learn')->dropIfExists('learn_lesson');
    }
};
