<?php

use App\Models\Animal;
use App\Models\EtatSante;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fiche_controles', function (Blueprint $table) {
            $table->id();
            $table->string('symptome');
            $table->string('diagnostique');
            $table->string('traitement');
            $table->date('date');
            $table->foreignIdFor(EtatSante::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Animal::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('etat_lactation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiche_controles');
    }
};
