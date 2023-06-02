<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('san_phams')->delete();

        DB::table('san_phams')->truncate();

        DB::table('san_phams')->insert([
            [
                'ten_san_pham'            => 'Quần Áo MU',
                'slug_san_pham'           => Str::slug('Quần Áo'),
                'tinh_trang'                => random_int(0, 2),
                'gia_ban'                 => 250.000 ,
                'hinh_anh'                  => 'https://cdn.yousport.vn/Media/Products/080618095555809/qabd-mu-2022-do-1.jpg',
            ],
            [
                'ten_san_pham'            => 'Quần Áo Real Madrid',
                'slug_san_pham'           => Str::slug('Quần Áo Real Madrid'),
                'tinh_trang'                => random_int(0, 1),
                'gia_ban'                 => 350.000 ,
                'hinh_anh'                  => 'https://cdn.yousport.vn/Media/Products/080618105429988/qabd-real-madrid-2022-trang-1.jpg',
            ],
            [
                'ten_san_pham'            => 'Quần Áo Dortmund',
                'slug_san_pham'           => Str::slug('Quần Áo Dortmund'),
                'tinh_trang'                => random_int(0, 1),
                'gia_ban'                 => 450.000 ,
                'hinh_anh'                  => 'https://cdn.yousport.vn/Media/Products/080618112856726/qabd-dortmund2022-vang-1.jpg',
            ],
            [
                'ten_san_pham'            => 'Quần Áo Bayern Munich',
                'slug_san_pham'           => Str::slug('Quần Áo Bayern Munich'),
                'tinh_trang'                => random_int(0, 2),
                'gia_ban'                 => 250.000 ,
                'hinh_anh'                  => 'https://cdn.yousport.vn/Media/Products/080618112029772/qabd-bayern-2022-do-1.jpg',
            ],
            [
                'ten_san_pham'            => 'Thảm tập yoga 10 li PAVO TYG014 – Xanh Coban',
                'slug_san_pham'           => Str::slug('Thảm tập yoga 10 li PAVO TYG014 – Xanh Coban'),
                'tinh_trang'                => random_int(0, 1),
                'gia_ban'                 => 250.000 ,
                'hinh_anh'                  => 'https://thegioidotap.vn/wp-content/uploads/2021/06/THAM-TAP-YOGA-10-LI-PAVO-MAU-XANH-DUONG.png',
            ],
        ]);
    }
}
