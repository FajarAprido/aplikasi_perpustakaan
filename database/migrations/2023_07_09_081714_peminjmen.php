<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {   
         /**
         * Run the migrations.
        */
        Schema::create('peminjmen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('buku');
            $table->string('tanggalPinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjman');
    }
};