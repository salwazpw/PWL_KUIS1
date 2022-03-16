<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
                'id' => '3515132104620008',
                'namaPelanggan' => 'Aldirangga Pratama W.',
                'noHP' => '08887174637',
                'alamat' =>  'Pasuruan'
            ],
            [
                'id' => '3514132106620018',
                'namaPelanggan' => 'Ardelia Pramesti C.',
                'noHP' => '0856030183493',
                'alamat' =>  'Sidoarjo'
            ],
            [
                'id' => '3514132105920012',
                'namaPelanggan' => 'Rafif Zaidan Afla',
                'noHP' => '082216303421',
                'alamat' =>  'Malang'
            ],
            [
                'id' => '3515132104820001',
                'namaPelanggan' => 'Nadira Gayatri',
                'noHP' => '085773918628',
                'alamat' =>  'Jakarta'
            ],
            [
                'id' => '3514131404920006',
                'namaPelanggan' => 'Nindita Suryaditya',
                'noHP' => '082129571453',
                'alamat' =>  'Palembang'
            ],
            [
                'id' => '351414040462002',
                'namaPelanggan' => 'Lentini Surya Rahajeng',
                'noHP' => '085559391274',
                'alamat' =>  'Bandung'
            ],
            [
                'id' => '351513040520008',
                'namaPelanggan' => 'Indira Trisdanadea',
                'noHP' => '085559615306',
                'alamat' =>  'Bali'
            ],
            [
                'id' => '3515157483910295',
                'namaPelanggan' => 'Ridho Catur',
                'noHP' => '0895364385657',
                'alamat' =>  'Lampung'
            ],
            [
                'id' => '3515148192057432',
                'namaPelanggan' => 'Tyas sasmita',
                'noHP' => '089375890124',
                'alamat' =>  'Karawang'
            ],
            [
                'id' => '3515138593019246',
                'namaPelanggan' => 'Azzahra M.K',
                'noHP' => '085104869123',
                'alamat' =>  'Lamongan'
            ]
        ];
        DB::table('Pelanggans') -> insert($data);
    }
}
