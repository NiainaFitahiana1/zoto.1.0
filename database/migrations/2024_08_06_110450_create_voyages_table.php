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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("article_id");
            $table->foreign("article_id")->references("id")->on("articles")->onUpdate("cascade")->onDelete("cascade");
            $table->string("point_A");
            $table->string("point_B");
            $table->string("tarif_1");
            $table->string("numero")->nullable();
            $table->string("tarif_3")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
