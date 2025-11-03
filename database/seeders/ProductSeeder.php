<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama' => 'Espresso',
                'deskripsi' => 'Kopi hitam pekat dengan cita rasa kuat.',
                'harga' => 20000,
                'stok' => 50,
                'gambar' => 'images/1.jpg',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Caffe Latte',
                'deskripsi' => 'Kopi dengan campuran susu lembut.',
                'harga' => 25000,
                'stok' => 30,
                'gambar' => 'images/2.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan produk lainnya sesuai kebutuhan
        ];
        DB::table('products')->insert($products);
    }
}
