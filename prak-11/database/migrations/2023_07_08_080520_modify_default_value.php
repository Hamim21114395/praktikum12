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
        //modify default value for table post column updatedAt and createdAt to datetime now
        Schema::table('posts', function (Blueprint $table) {
            $table->dateTime('updated_at')->default(now())->change();
            $table->dateTime('created_at')->default(now())->change();
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
