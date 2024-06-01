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
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('photo',255);
            $table->string('title1');
            $table->string('title2');
            $table->string('content');
            $table->string('btn',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
