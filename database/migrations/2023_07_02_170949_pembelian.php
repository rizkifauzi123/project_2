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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->integer('harga_beli');
            $table->foreignId('produk_id')->constrained(
                table: 'produks', indexName: 'pembeliasn_produks_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // $table->foreign('produk_id')->references('id')->on('produks')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained(
                table: 'suppliers', indexName: 'pembelians_supplier_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // $table->foreign('supplier_id')->references('id')->on('suppliers')
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
        Schema::dropIfExists('pembelians');
    }
};
