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
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',100);
            $table->integer('stok');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->foreignId('jenis_produks_id')->constrained(
                table: 'jenis_produks', indexName: 'produks_jenis_produks_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // $table->bigInteger('jenis_produks_id');
            $table->timestamps();
        });

        // Schema::table('produks', function (Blueprint $table) {
        //     $table->foreign('jenis_produks_id')->references('id')->on('jenis_produks')
        //             ->onUpdate('cascade')
        //             ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
