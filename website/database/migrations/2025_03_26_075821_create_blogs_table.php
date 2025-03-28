<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name');
            $table->text('content');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug');
            $table->json('images')->nullable(); // Store multiple images as JSON
            $table->enum('status', ['active', 'draft', 'inactive'])->default('draft');
            $table->boolean('display_on_home')->default(false);
            $table->json('tags')->nullable(); // Store tags as JSON
            $table->json('categories')->nullable(); // Store categories as JSON
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};

