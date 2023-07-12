<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pesanans::create([
            'tanggal' => 2023-07-03,
            'jumlah' => 5,
            'nama_pembeli' => Qin,
            'produk_id' => 1
        ]);
    }
}
