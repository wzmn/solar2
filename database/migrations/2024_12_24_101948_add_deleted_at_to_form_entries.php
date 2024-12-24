<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('form_entries', function (Blueprint $table) {
            $table->softDeletes(); // Adds the deleted_at column
        });
    }

    public function down(): void
    {
        Schema::table('form_entries', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Removes the deleted_at column
        });
    }
};