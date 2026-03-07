<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop LOQ', 'harga_beli' => 10000000, 'harga_jual' => 10500000],
            ['barang_id' => 2, 'kategori_id' => 2, 'barang_kode' => 'BRG002', 'barang_nama' => 'Beras 7 kg', 'harga_beli' => 75000, 'harga_jual' => 80000],
            ['barang_id' => 3, 'kategori_id' => 3, 'barang_kode' => 'BRG003', 'barang_nama' => 'Kaos Skecher', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['barang_id' => 4, 'kategori_id' => 4, 'barang_kode' => 'BRG004', 'barang_nama' => 'Sepatu Skecher', 'harga_beli' => 3000000, 'harga_jual' => 3100000],
            ['barang_id' => 5, 'kategori_id' => 5, 'barang_kode' => 'BRG005', 'barang_nama' => 'Buku Tulis A4', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => 'BRG006', 'barang_nama' => 'Mouse Wireless Acer', 'harga_beli' => 400000, 'harga_jual' => 420000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Jaket Kekalahan', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'BRG009', 'barang_nama' => 'Sepatu Basket Adidas', 'harga_beli' => 4000000, 'harga_jual' => 4300000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Buku Laut Bercerita', 'harga_beli' => 100000, 'harga_jual' => 120000],
            ['barang_id' => 11, 'kategori_id' => 1, 'barang_kode' => 'BRG011', 'barang_nama' => 'RAM 16 GB', 'harga_beli' => 1000000, 'harga_jual' => 1500000],
            ['barang_id' => 12, 'kategori_id' => 2, 'barang_kode' => 'BRG012', 'barang_nama' => 'Chitato 60gr', 'harga_beli' => 16000, 'harga_jual' => 19000],
            ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'BRG013', 'barang_nama' => 'Keyboard KOORUI', 'harga_beli' => 900000, 'harga_jual' => 9500000],
            ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'BRG014', 'barang_nama' => 'Sepatu Adidas Samba', 'harga_beli' => 1000000, 'harga_jual' => 1200000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Buku 3276 mdpl', 'harga_beli' => 90000, 'harga_jual' => 100000],
        ];

        DB::table('m_barang')->insert($data);
    }
}