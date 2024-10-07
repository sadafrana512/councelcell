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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->string('comments');
            $table->string('class_id');
            $table->string('name');
            $table->string('request_id');
            $table->string('counselor');
            // $table->string('name');
            $table->string('reason');
            $table->boolean('appointed')->default(true);
            $table->boolean('caseclose')->default(true);
            $table->boolean('hod_appointed')->default(false);
            $table->boolean('nonappointed')->default(true);
            $table->boolean('pcho_appointed')->default(false);
            $table->boolean('pchi_appointed')->default(false);
            $table->boolean('coordinator_appointment')->default(false);
            $table->boolean('followupappointed')->default(false);
            $table->boolean('referals')->default(false);
            $table->boolean('referback')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
