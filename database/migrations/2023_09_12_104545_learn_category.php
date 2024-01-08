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
        Schema::connection('learn')->create('learn_category', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->longText('Slug');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('learn')->dropIfExists('learn_category');
    }
};
