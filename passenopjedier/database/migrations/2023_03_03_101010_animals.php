<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id('animalID');
            $table->string('name');
            $table->integer('age');
            $table->string('sort');
            $table->unsignedBigInteger('owner');
            $table->text('note');

            $table->foreign('sort')->references('sort')->on('sort_of_animals');
            $table->foreign('owner')->references('accountID')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropForeign('animals_sort_foreign');
            $table->dropForeign('animals_owner_foreign');
        });
        Schema::dropIfExists('animals');
    }
};
