<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('content', 5000); // Using VARCHAR instead of TEXT
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_description', 500)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('tags', 500)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('display_on_home', 10)->default('no'); // Instead of ENUM
            $table->string('status', 10)->default('s_act'); // Instead of ENUM
            $table->string('cat_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
