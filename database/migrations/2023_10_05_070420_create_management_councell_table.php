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
        Schema::create('management_councell', function (Blueprint $table) {
            $table->id();
            $table->string('hod_name');
            $table->string('hod_id');
            $table->string('counsellor_name');
            $table->string('counsellor_id');
            $table->string('coordinator_name');
            $table->string('coordinator_id');
            $table->string('psychiatrist_name');
            $table->string('psychiatrist_id');
            $table->string('program_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_councell');
    }
};
