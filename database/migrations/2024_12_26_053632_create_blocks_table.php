<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name or identifier of the component (e.g., "hero-section", "contact-form")
            $table->string('type'); // Type of component (e.g., "text", "image", "gallery", "form", "map")
            $table->json('data')->nullable(); // JSON data for the component's content
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
