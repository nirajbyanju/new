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
        Schema::connection('blogs')->create('post', function (Blueprint $table) {
            $table->id('post_id'); 
            $table->string('title');
            $table->string('entry');
            $table->string('author');
            $table->string('category');
            $table->string('status');
            $table->string('content');
            $table->datetime('publish_date');
            $table->string('thumbnail');
            $table->string('media');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('blogs')->dropIfExists('post');
    }
};
