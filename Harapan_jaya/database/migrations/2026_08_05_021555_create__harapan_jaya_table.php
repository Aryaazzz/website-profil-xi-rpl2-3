<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('_harapan_jaya', function (Blueprint $table) {

            $table->id();

            $table->integer('id_kopdes')->unique();

            $table->string('nama_kopdes',255);

            $table->string('nama_manager',100);

            $table->date('tanggal_berdiri');

            $table->string('alamat',255);

            $table->string('gambar')->nullable();

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('_harapan_jaya');
    }

};