<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'kode_barang' => '001',
            'nama_barang' => 'Indomie',
            'stok' => '50',
            'satuan' => 'KG',   
        ]);
    }
}
