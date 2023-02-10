<?php

namespace Database\Seeders;

use App\Models\absensi;
use App\Models\karyawan;
use App\Models\User;
use App\Models\gaji;
use App\Models\detail;
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

        // karyawan::create([
        //     'nm_karyawan' => 'anto',
        //     'absensi_id' => 1,
        //     'jns_kelamin' => 'Laki-Laki',
        //     'agama' => 'islam',
        //     'ttl' => '2023/01/16',
        //     'no_telpon' => '085742',
        //     'status' => 'jomblo',
        //     'alamat' => 'malang',
        //     'kewarganegaraan' => 'indonesia',
        //     'foto' => 'foto.png',
        //     'gaji_id' => 1,
        // ]);

        karyawan::create([
            'nm_karyawan' => 'Vian',
            'jns_kelamin' => 'Laki-Laki',
            'agama' => 'islam',
            'ttl' => '2023/01/16',
            'no_telpon' => '08574209',
            'status' => 'jomblo',
            'alamat' => 'malang',
            'kewarganegaraan' => 'Indonesia',
            'foto' => 'foto1.png',
            'gaji_id' => 1,
            'absensi_id' => 1,
        ]);

        gaji::create([
            'jabatan' => 'Manager Keuangan',
            'gaji_pokok' => 5000000,
        ]);

        gaji::create([
            'jabatan' => 'Karyawan',
            'gaji_pokok' => 2000000,
        ]);

        // absensi::create([
        //     'nama' => 'anto',
        //     'terlambat' => 1,
        //     'lembur' => 2,
        //     'sakit' => 1,
        //     'izin' => 1,
        //     'cuti' => 2,
        //     'denda' => 5000,
        //     'gajiLembur' => 25000,
        // ]);

        absensi::create([
            'karyawan_id' => 1,
            'terlambat' => 2,
            'lembur' => 5,
            'sakit' => 5,
            'izin' => 4,
            'cuti' => 10,
            'bulan' => '2023/01/16',
            'alpha' => 1,
            // 'denda' => 90000,
            // 'gajiLembur' => 125000,
        ]);

        // detail::create([
        //     'karyawan_id' => 1,
        //     'absensi_id' => 1,
        //     'lembur' => 120000,
        //     'tunjangan_id' => 1,
        //     'pph_id' => 1,
        //     'bpjs_id' => 1,
        //     'ass_kec_id' => 1,
        //     'ass_kem_id' => 1,
        //     'iuran_pensiun_id' => 1,
        //     'iuran_organisasi_id' => 1,
        //     'denda' => 500000,
        //     'lain-lain' => 500000,
        //     'tot_pot' => 500000,
        //     'subtot' => 500000,
        //     'gtot' => 500000,
        // ]);

    }
}
