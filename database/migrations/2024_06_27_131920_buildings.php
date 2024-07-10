<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('building_name');
            $table->integer('building_room');
            $table->integer('floor_quantity');
            $table->integer('building_capacity');
            $table->string('faculty');
            $table->string('prodi');
            $table->boolean('is_highlighted')->default(false); // Adding highlight field
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
