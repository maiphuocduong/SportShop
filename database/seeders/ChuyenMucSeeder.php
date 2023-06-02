<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ChuyenMucSeeder extends Seeder
{
    public function run()
    {
        DB::table('chuyen_mucs')->delete();

        DB::table('chuyen_mucs')->truncate();

        DB::table('chuyen_mucs')->insert([
            [
                'ten_chuyen_muc'            => 'NAM',
                'slug_chuyen_muc'           => Str::slug('nam'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
            ],
            [
                'ten_chuyen_muc'            => 'NỮ',
                'slug_chuyen_muc'           => Str::slug('nu'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
            ],
            [
                'ten_chuyen_muc'            => 'Phụ Kiện',
                'slug_chuyen_muc'           => Str::slug('Phụ Kiện'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
            ],
            [
                'ten_chuyen_muc'            => 'Hệ Thống Đại Lý',
                'slug_chuyen_muc'           => Str::slug('Hệ thống đại lý'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
            ],

        ]);
    }
}
