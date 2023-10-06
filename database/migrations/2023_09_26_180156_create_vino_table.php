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
        Schema::create('vino', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('ime');
            $table->integer('godina');
            $table->integer('cena');
            $table->longText('opis');
            $table->string('vinarija');
            $table->string('grad');
            $table->string('adresa');
            $table->string('tip');
            $table->string('email');
            $table->string('strana');
            $table->string('slika')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vino');
    }
};
