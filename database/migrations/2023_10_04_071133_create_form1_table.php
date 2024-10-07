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
        Schema::create('form1', function (Blueprint $table) {
            $table->id();
            $table->string('request_id');
            $table->string('program');
            $table->string('class_name');
            $table->string('class_id');
            $table->string('name');
            $table->text('dob');
            $table->text('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('reason');
            $table->string('counselor');
            $table->string('history');
            $table->string('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form1');
    }
};
