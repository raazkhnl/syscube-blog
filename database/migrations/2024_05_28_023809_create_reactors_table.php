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
        Schema::create('reactors', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('user_id');
            $table->unsignedSmallInteger('blog_id');
            $table->boolean('like')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reactors');
    }
};
