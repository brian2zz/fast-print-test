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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id_kategori')->on('categories')->onDelete('set null');
            $table->foreign('id_status')->references('id_status')->on('statuses')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
