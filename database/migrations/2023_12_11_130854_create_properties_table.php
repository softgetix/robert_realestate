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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('availability',255);
            $table->string('name', 255);
            $table->string('address1', 255);
            $table->string('address2', 255);
            $table->string('zoning', 255);
            $table->string('value', 255);
            $table->string('amenities', 255);
            $table->string('description');
            $table->string('market_title', 255);
            $table->string('market_description', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
