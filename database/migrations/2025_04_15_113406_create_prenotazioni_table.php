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
        Schema::create('prenotazioni', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campo_id')->constrained()->onDelete('cascade'); // Riferimento alla tabella "campi"
            $table->string('nome'); // Nome dell'utente
            $table->date('data'); // Data della prenotazione
            $table->time('orario'); // Orario della prenotazione
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prenotazioni');
    }
};

