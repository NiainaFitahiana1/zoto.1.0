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
        Schema::create('paye_res', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("reservation_id")->required();
            $table->foreign('reservation_id')->references("id")->on("reservations")->onUpdate("cascade")->onDelete('cascade');
            $table->unsignedBigInteger("user_id")->required();
            $table->foreign('user_id')->references("id")->on("users")->onUpdate("cascade")->onDelete('cascade');
            $table->integer("statut")->required();
            $table->string("reference")->required();
            $table->string("envoyeur")->required();
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paye_res');
    }
};
