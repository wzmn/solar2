<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Custom title
            $table->string('name'); // Original file name
            $table->string('path')->nullable();; // Path to the file in storage
            $table->string('mime_type')->nullable(); // MIME type of the file
            $table->unsignedBigInteger('size')->nullable(); // File size in bytes
            $table->string('disk')->default('local'); // Storage disk (local, s3, etc.)
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};