<?php

namespace Database\Seeders;

use App\Models\absensi;
use App\Models\karyawan;
use App\Models\User;
use App\Models\gaji;
use App\Models\detail;
use App\Models\potongan;
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


        // User::create([
        //     'username' => 'uqi',
        //     'password' => 'uqiuqi',
        //     'admin' => '1'
        // ]);

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
            'pot_id' => 1,
            // 'absensi_id' => 1,
        ]);

        gaji::create([
            'jabatan' => 'Manager Keuangan',
            'gaji_pokok' => 5000000,
            'gaji_lembur' => 50000,
            'tunjangan' => 500000,
        ]);

        gaji::create([
            'jabatan' => 'Karyawan',
            'gaji_pokok' => 2000000,
            'gaji_lembur' => 25000,
            'tunjangan' => 250000,
        ]);

        potongan::create([
            'gaji_id' => 1,
            'pot_pph' => 2,
            'pot_ass_kec' => 2,
            'pot_ass_kem' => 2,
            'pot_iuran_tht' => 2,
            'pot_iuran_pensiun' => 2,
            'pot_iuran_organisasi' => 2,
            'denda_terlambat' => 30000,
            'limit_izin' => 3,
            'denda_izin' => 50000,
            'limit_cuti' => 15,
            'denda_cuti' => 70000,
            'denda_alpha' => 70000,
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
        //     'jabatan' => 'karyawan',
        //     'gaji_pokok' => 2000000,
        //     'lembur' => 120000,
        //     'tunjangan' => 120000,
        //     'pph' => 10000,
        //     // 'bpjs' => 10000,
        //     'ass_kec' => 10000,
        //     'ass_kem' => 10000,
        //     'iuran_tht' => 20000,
        //     'iuran_pensiun' => 10000,
        //     'iuran_organisasi' => 10000,
        //     'terlambat' => 500000,
        //     'izin' => 500000,
        //     'cuti' => 20000,
        //     'alpha' => 70000,
        //     'sakit' => 2,
        //     'biaya' => 'kasbon',
        //     'jum_bi' => 500000,
        //     'tot_pot' => 500000,
        //     'subtot' => 500000,
        //     'gtot' => 500000,
        // ]);

    }
}
