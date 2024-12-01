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
        Schema::create('contestations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_representant_id')->constrained()->onDelete('cascade');
            $table->foreignId('resultat_bureau_vote_id')->constrained()->onDelete('cascade');
            $table->string('motif');
            $table->text('description');
            $table->string('statut')->default('en_attente'); // en_attente, validee, rejetee
            $table->string('preuve')->nullable(); // Pour stocker le chemin vers un fichier de preuve
            $table->dateTime('date_soumission');
            $table->dateTime('date_traitement')->nullable();
            $table->text('reponse')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contestations');
    }
};
