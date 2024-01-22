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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->default(null);
            $table->string('type');
            $table->string('title');
            $table->string('img-path');
            $table->string('tags');
            $table->string('date');
            $table->longText('content');
            $table->integer('views')->default(0);
            $table->integer('visitors')->default(0);
            $table->integer('likes')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
