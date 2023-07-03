<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        suppliers::create([
            'nama' => 'Rendy',
            'kota' => 'Jakarta',
            'email' => 'Rendy@gmail.com',
            'telephone' => +62842143211,
            'cp' => +2134
        ]);
    }
}
