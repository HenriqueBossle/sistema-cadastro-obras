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
        Schema::create('constructions', function (Blueprint $table) {
            $table->id();
            $table->string('builder_name', 200);
            $table->string('builder_phone', 200);
            $table->string('sitemanager_name', 200);
            $table->string('sitemanager_phone', 200);
            $table->string('address', 200);
            $table->string('type', 200);
            $table->string('status', 200);
            $table->integer('volume',);
            $table->text('notes',);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constructions');
    }
};
