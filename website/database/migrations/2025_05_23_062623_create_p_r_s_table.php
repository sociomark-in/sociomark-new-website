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
        Schema::create('p_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('card_title');
            $table->string('pr_title');
            $table->text('description');
            $table->string('link')->nullable();
            $table->string('img')->nullable();
            $table->date('post_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_r_s');
    }
};
