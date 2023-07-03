<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        produks::create([
            'nama' => 'Toast',
            'stok' => 10,
            'harga_beli' => 10000,
            'harga_jual' => 12000,
            'jenis_produk_id' => 1
        ]);
    }
}
