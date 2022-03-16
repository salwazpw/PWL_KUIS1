<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'merkMobil' => 'Toyota',
                'gambarMobil' => 'toyota.png',
                'harga' =>  'Rp. 400.000'
            ],
            [
                'merkMobil' => 'Honda',
                'gambarMobil' => 'hrv.png',
                'harga' =>  'Rp. 400.000'
            ],
            [
                'merkMobil' => 'Mitsubishi',
                'gambarMobil' => 'mitsubishi.jpg',
                'harga' =>  'Rp. 450.000'
            ],
            [
                'merkMobil' => 'Isuzu',
                'gambarMobil' => 'isuzu.jpg',
                'harga' =>  'Rp. 300.000'
            ],
            [
                'merkMobil' => 'Daihatsu',
                'gambarMobil' => 'daihatsu.png',
                'harga' =>  'Rp. 350.000'
            ],
            [
                'merkMobil' => 'Hyundai',
                'gambarMobil' => 'hyundai.jpg',
                'harga' =>  'Rp. 450.000'
            ],
            [
                'merkMobil' => 'Mazda',
                'gambarMobil' => 'mazda.jpg',
                'harga' =>  'Rp. 700.000'
            ],
            [
                'merkMobil' => 'Suzuki',
                'gambarMobil' => 'suzuki.png',
                'harga' =>  'Rp. 300.000'
            ],
            [
                'merkMobil' => 'Nissan',
                'gambarMobil' => 'nissan.jpg',
                'harga' =>  'Rp. 500.000'
            ],
            [
                'merkMobil' => 'Ford',
                'gambarMobil' => 'ford.jpg',
                'harga' =>  'Rp. 300.000'
            ],
        ];
            DB::table('Barangs')->insert($data);
    }
}
