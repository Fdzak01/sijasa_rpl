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
        Schema::create('services', function (Blueprint $table) {
            $table->id('id');
            $table->string('namaLayanan');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->float('harga');
            $table->unsignedBigInteger('idPenyedia');
            $table->timestamps();
    
            // Menambahkan foreign key constraint
            $table->foreign('idPenyedia')->references('id')->on('service_providers')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
