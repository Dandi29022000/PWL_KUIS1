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
        DB::table('pegawais')->insert([
            'nim' => '1641720110',
            'nama' => 'Dandi Cristiano.',
            'absen' => '04',
            'foto' => 'Messi.jfif'
        ]);

        DB::table('pegawais')->insert([
            'nim' => '1541720090',
            'nama' => 'Auzan Messi',
            'absen' => '03',
            'foto' => 'CR.jfif'
            ]);
    }
}
