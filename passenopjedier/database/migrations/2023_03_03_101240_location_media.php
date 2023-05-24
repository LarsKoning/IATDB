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
        Schema::create('location_media', function (Blueprint $table) {
            $table->string('location');
            $table->string('media')->default('noimage.png');

            $table->foreign('location')->references('address')->on('location')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('location_media', function (Blueprint $table) {
            $table->dropForeign('location_media_location_foreign');
        });

        Schema::dropIfExists('location_media');
    }
};
