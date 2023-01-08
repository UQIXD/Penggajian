<?php

namespace Database\Seeders;

use App\Models\karyawan;
use App\Models\User;
use App\Models\gaji;
use App\Models\departemen;
use App\Models\jabatan;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'username' => 'uqi',
            'password' => 'uqiuqi',
            'admin' => '1'
        ]);

        karyawan::create([
            'nm_karyawan' => 'anto',
            'jns_kelamin' => 'Laki-Laki',
            'agama' => 'islam',
            'no_telpon' => '085742',
            'status' => 'jomblo',
            'alamat' => 'malang',
            'kewarganegaraan' => 'indonesia',
            'foto' => 'foto.png',
            'gaji_id' => 1,
        ]);

        gaji::create([
            'bulan' => 1000,
            'tahun' => 2000,
            'masa_kerja' => 2,
            'departemen_id' => 1,
            'jabatan_id' => 1,
            'tj_anak' => 90,
            'tj_istri' => 20,
            'total' => 50000,
        ]);

        departemen::create([
            'nm_departemen' => 'hukum',
        ]);

        jabatan::create([
            'posisi_jabatan' => 'manager',
            'tunjangan_jabatan' => '5000',
        ]);
    }
}
