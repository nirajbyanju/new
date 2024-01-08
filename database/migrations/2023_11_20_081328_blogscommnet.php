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
        Schema::connection('blogs')->create('comments', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('prent_id')->nullable;
            $table->unsignedBigInteger('reply_id')->nullable;
            $table->text('comment');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        //
    }
};
