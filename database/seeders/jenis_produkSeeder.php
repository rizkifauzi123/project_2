<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jenis_produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jenis_produks::create([
            'nama' => 'Menu Utama'
        ]);
    }
}
