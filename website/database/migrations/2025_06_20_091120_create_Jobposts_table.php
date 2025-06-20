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
        Schema::create('Jobposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->text('compensation');
            $table->text('role_overview');
            $table->text('responsibilities'); // stored as JSON
            $table->text('requirements'); // stored as JSON
            $table->text('target_services'); // stored as JSON
            $table->string('industry');
            $table->string('position');
            $table->string('experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Jobpost');
    }
};
