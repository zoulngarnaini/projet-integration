<?php

use App\Models\Animal;
use App\Models\Lait;
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
        Schema::create('traites', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Animal::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Lait::class)->constrained()->cascadeOnDelete();
            $table->string('periode');
            $table->string('superviseur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traites');
    }
};
