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
        Schema::create('area_prospect', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('prospect_id');
            
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('prospect_id')->references('id')->on('prospects');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_prospect');
    }
};
