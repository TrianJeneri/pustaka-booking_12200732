<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Trian Jeneri',
                'password'  => md5('12200732')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => '12200732',
                'password'  => md5('Trian Jeneri')
            ]
        ];
        
        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
