<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
            'id' => 1,
            'nama' => 'Barang Masuk'
        ]);
        Jenis::create([
            'id' => 2,
            'nama' => 'Barang Keluar'
        ]);
    }
}
