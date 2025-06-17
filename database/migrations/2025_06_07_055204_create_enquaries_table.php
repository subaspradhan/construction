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
        Schema::create('enquaries', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('message');
            $table->string('price_id');
            $table->string('status')->default('not_seen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquaries');
    }
};
