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
        Schema::create('animals_media', function (Blueprint $table) {
            $table->unsignedBigInteger("animal");
            $table->string("media")->default("noimage.png");

            $table->foreign("animal")->references("animalID")->on("animals")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('animals_media', function (Blueprint $table) {
            $table->dropForeign('animals_media_animal_foreign');
        });

        Schema::dropIfExists('animals_media');
    }
};
