<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama' => 'Budi',
            'nomor_induk' => 100,
            'alamat'=> 'Jember',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Ani',
            'nomor_induk' => 101,
            'alamat'=> 'Lumajang',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Joko',
            'nomor_induk' => 103,
            'alamat'=> 'Semboro',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
