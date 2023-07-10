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
        // Modify to allow null and make it default null for table posts
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('category')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->string('author')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
