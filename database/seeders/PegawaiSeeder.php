<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                'namaPegawai' => 'Adam Murtadho',
                'noHP' => '08887170656',
                'posisi' =>  'CEO'
            ],
            [
                'namaPegawai' => 'Nazela Hanum Mukhidah',
                'noHP' => '085608534493',
                'posisi' =>  'Admin 1'
            ],
            [
                'namaPegawai' => 'Salwa Zhafira Pratiwi W.',
                'noHP' => '082216303339',
                'posisi' =>  'Admin 2'
            ],
            [
                'namaPegawai' => 'Shella Amalia',
                'noHP' => '085775909628',
                'posisi' =>  'Customer Service'
            ],
            [
                'namaPegawai' => 'Taufan Satya',
                'noHP' => '082141912453',
                'posisi' =>  'Driver'
            ],
            [
                'namaPegawai' => 'Hasbi Alghifari',
                'noHP' => '085559623484',
                'posisi' =>  'Driver'
            ],
            [
                'namaPegawai' => 'Nuril Hayyin',
                'noHP' => '085559678965',
                'posisi' =>  'Driver'
            ],
            [
                'namaPegawai' => 'Rhaisyah Dwi',
                'noHP' => '0895364893657',
                'posisi' =>  'Accounting'
            ],
            [
                'namaPegawai' => 'Akhmad Ikhwan',
                'noHP' => '0895578956538',
                'posisi' =>  'Teknisi'
            ],
            [
                'namaPegawai' => 'Sevilla Nava',
                'noHP' => '085785068818',
                'posisi' =>  'Marketing'
            ]
        ];
        DB::table('Pegawais') -> insert($data);
    }
}

