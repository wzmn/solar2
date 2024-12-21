<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->timestamp('date')->nullable();
            // $table->timestamp('closing_date')->nullable();
            // $table->string('location')->nullable();
            // $table->string('type')->nullable();
            // $table->decimal('salary', 10, 2)->nullable();
            // $table->string('company')->nullable();
            // $table->string('company_logo')->nullable();
            $table->string('apply_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};