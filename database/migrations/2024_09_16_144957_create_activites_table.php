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
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->required();
            $table->foreign('user_id')->references("id")->on("users")->onUpdate("cascade")->onDelete('cascade');
            $table->unsignedBigInteger("reservation_id")->nullable();
            $table->foreign('reservation_id')->references("id")->on("reservations")->onUpdate("cascade")->onDelete('cascade');
            $table->unsignedBigInteger("article_id")->nullable();
            $table->foreign('article_id')->references("id")->on("articles")->onUpdate("cascade")->onDelete('cascade');
            $table->string('etat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activites');
    }
};
