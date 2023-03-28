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
            $table->string('name');
            $table->longText('description')->nullable();
            $table->float('price');
            $table->unsignedBigInteger('client_id');
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('property_type_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('property_type_id')->references('id')->on('property_types');
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
