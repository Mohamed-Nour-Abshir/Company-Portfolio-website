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
        Schema::create('software_services', function (Blueprint $table) {
            $table->id();
            $table->string('s_name')->nullable();
            $table->string('description')->nullable();
            $table->string('reviews')->nullable();
            $table->string('old_price')->nullable();
            $table->string('new_price')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_services');
    }
};
