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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('photo',255);
            $table->string('title1',100);
            $table->string('title2',100);
            $table->string('title3',100);
            $table->decimal('price',10);
            $table->string('title4',100);
            $table->string('title5',100);
            $table->text('content');
            $table->string('title6',100);
            $table->string('title7',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
