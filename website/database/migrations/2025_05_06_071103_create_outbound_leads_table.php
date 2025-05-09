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
        Schema::create('outbound_leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('industry')->nullable();
            $table->string('service')->nullable();
            $table->string('location')->nullable();
            $table->string('source')->nullable();
            $table->enum('status', ['New', 'Hot', 'Warm', 'Cold', 'Qualified','Converted'])->default('New');
            $table->date('first_contact_date')->nullable();
            $table->text('notes')->nullable();
            $table->date('second_followup_date')->nullable();
            $table->text('notes2')->nullable();
            $table->string('budget')->nullable();
            $table->date('third_follow_up_date')->nullable();
            $table->text('notes3')->nullable();
            $table->string('assigned_to')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outbound_leads');
    }
};
