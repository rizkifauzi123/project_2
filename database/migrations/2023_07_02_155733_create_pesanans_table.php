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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->string('nama_pembeli');
            $table->foreignId('produk_id')->constrained(
                table: 'produks', indexName: 'pesanans_produks_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // $table->foreign('produk_id')->references('id')->on('produks')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
