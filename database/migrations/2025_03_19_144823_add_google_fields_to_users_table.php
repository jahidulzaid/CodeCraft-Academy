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
        // for google auth
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable();
            $table->string('avatar')->nullable();
            $table->text('access_token')->nullable();
            $table->text('refresh_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
    
};
