<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert([
            'nama' => 'Linda',
            'alamat_acara' => 'Kelungkung',
            'jenis_tari' => 'Tari Bebali',
            'tanggal_acara' => '2021-12-02',
            'harga' => '2500000',
            'nama_tari' => 'arje',
        ]);
    }
}
