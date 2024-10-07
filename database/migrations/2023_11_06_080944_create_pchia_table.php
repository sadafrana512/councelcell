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
        Schema::create('pchia', function (Blueprint $table) {
            $table->id();
            $table->string('class_id');
            $table->string('name');
            $table->string('request_id');
            $table->string('counselor');
            $table->string('reason');
            $table->string('psychiatrist');
            $table->string('message');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pchia');
    }
};
