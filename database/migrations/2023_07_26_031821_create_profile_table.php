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
        Schema::create('ibu_hamil', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_ibu');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('hamil_ke');
            $table->date('haid_terakhir');
            $table->string('tekanan_darah');
            $table->enum('responden', ['ya', 'tidak']);
            $table->string('tanda_tangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu_hamil');
    }
};