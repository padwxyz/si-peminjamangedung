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
        Schema::create('loan_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->constrained();
            $table->foreignId('room_id')->constrained();

            $table->foreignId('admin_id')->nullable()->constrained();
            $table->foreign('user_id')->nullable()->constrained();

            $table->date('loan_start_date');
            $table->date('laon_end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->file('activity_letter');
            $table->string('purpose');
            $table->tinyInteger('status_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_schedules');
    }
};
