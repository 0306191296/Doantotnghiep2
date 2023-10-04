<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sanpham::create([
            'masp'=>'a01',
            'makm'=>'b01',
            'tensp'=>'iPhone 14 Pro Max 128GB | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',

        ]);
        sanpham::create([
            'masp'=>'a02',
            'makm'=>'b02',
            'tensp'=>'iPhone 14 Pro Max 256GB | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',
            
        ]);
        sanpham::create([
            'masp'=>'a03',
            'makm'=>'b03',
            'tensp'=>'iPhone 14 Pro Max 512GB | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',
            
        ]);
        sanpham::create([
            'masp'=>'a04',
            'makm'=>'b04',
            'tensp'=>'iPhone 14 Pro Max 1T | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',
            
        ]);
        sanpham::create([
            'masp'=>'a05',
            'makm'=>'b05',
            'tensp'=>'iPhone 14 Pro 128GB | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',
            
        ]);
        sanpham::create([
            'masp'=>'a06',
            'makm'=>'b06',
            'tensp'=>'iPhone 14 Pro 256GB | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',
            
        ]);
        sanpham::create([
            'masp'=>'a07',
            'makm'=>'b07',
            'tensp'=>'iPhone 14 Pro 512GB | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',
            
        ]);
        sanpham::create([
            'masp'=>'a08',
            'makm'=>'b08',
            'tensp'=>'iPhone 14 Pro 1T | Chính hãng VN/A',
            'thuonghieu'=>'iPhone',
            'tinhtrang'=>'Còn hàng',
            
        ]);
    }
}
