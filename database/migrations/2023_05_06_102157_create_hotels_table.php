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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('banner', 250)->nullable();
            $table->string('title', 250)->nullable();
            $table->text('trip_brief')->nullable();
            $table->text('overview')->nullable();
            $table->double('cost',10,2)->nullable();
            $table->string('address', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->longText('phone')->nullable();
            $table->string('facebook', 250)->nullable();
            $table->string('youtube', 250)->nullable();
            $table->string('instagram', 250)->nullable();
            $table->string('linkedin', 250)->nullable();
            $table->string('google_plus', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
