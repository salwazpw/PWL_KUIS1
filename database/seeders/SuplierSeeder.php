<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
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
                'namaSuplier' => 'Muhammad Zavier',
                'merkMobil' => 'Honda',
            ],
            [
                'namaSuplier' => 'Ahsan Al Kholqi',
                'merkMobil' => 'Mitsubishi',
            ],
            [
                'namaSuplier' => 'Syakira Al-Khalisa',
                'merkMobil' => 'Hyundai',
            ],
            [
                'namaSuplier' => 'Muhammad Farid',
                'merkMobil' => 'Toyota',
            ],
            [
                'namaSuplier' => 'Abidzar Rizky',
                'merkMobil' => 'Ford',
            ],
            [
                'namaSuplier' => 'Azzah Dian',
                'merkMobil' => 'isuzu',
            ],
            [
                'namaSuplier' => 'Vania Salsabillah',
                'merkMobil' => 'Daihatsu',
            ],
            [
                'namaSuplier' => 'Yostha Va Revikasyahte',
                'merkMobil' => 'Mazda',
            ],
            [
                'namaSuplier' => 'Bagus Billy',
                'merkMobil' => 'Nissan',
            ],
            [
                'namaSuplier' => 'Dewangga Jordy',
                'merkMobil' => 'Suzuki',
            ]
        ];
        DB::table('Supliers') -> insert($data);
    }
}

