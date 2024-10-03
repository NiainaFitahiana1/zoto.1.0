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
        Schema::create('fiaras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("location_id");
            $table->foreign('location_id')->references("id")->on("locations")->onUpdate("cascade")->onDelete('cascade');
            $table->string("photos");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiaras');
    }
};
