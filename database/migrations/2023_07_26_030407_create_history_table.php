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
        Schema::create('ibu_hamil_quesioner', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('profile_id');
            $table->string('pertanyaan');
            $table->enum('status', ['ya', 'tidak']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu_hamil_quesioner');
    }
};
