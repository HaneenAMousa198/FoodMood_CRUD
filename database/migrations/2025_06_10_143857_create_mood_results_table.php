<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mood_results', function (Blueprint $table) {
            $table->id();
            $table->json('answers');
            $table->text('analysis');
            $table->json('dominant_moods');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mood_results');
    }
};


