<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pembelians::create([
            'tanggal' => 2003-06-30,
            'jumlah' => 10,
            'harga_beli' => 12000,
            'produk_id' => 1,
            'supplier_id' => 1
        ]);
    }
}
