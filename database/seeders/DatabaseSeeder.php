<?php

namespace Database\Seeders;

use App\Models\ass_kec;
use App\Models\ass_kem;
use App\Models\bpjs;
use App\Models\karyawan;
use App\Models\User;
use App\Models\gaji;
use App\Models\detail;
use App\Models\iuran_organisasi;
use App\Models\iuran_pensiun;
use App\Models\pph;
use App\Models\tunjangan;
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
            'ttl' => '2023/01/16',
            'no_telpon' => '085742',
            'status' => 'jomblo',
            'alamat' => 'malang',
            'kewarganegaraan' => 'indonesia',
            'foto' => 'foto.png',
            'gaji_id' => 1,
        ]);

        gaji::create([
            'jabatan' => 'Manager Keuangan',
            'gaji_pokok' => 2000000,
        ]);

        gaji::create([
            'jabatan' => 'Manager Pemasaran',
            'gaji_pokok' => 1500000,
        ]);

        detail::create([
            'karyawan_id' => 1,
            'absensi_id' => 1,
            'lembur' => 120000,
            'tunjangan_id' => 1,
            'pph_id' => 1,
            'bpjs_id' => 1,
            'ass_kec_id' => 1,
            'ass_kem_id' => 1,
            'iuran_pensiun_id' => 1,
            'iuran_organisasi_id' => 1,
            'denda' => 500000,
            'lain-lain' => 500000,
            'tot_pot' => 500000,
            'subtot' => 500000,
            'gtot' => 500000,
        ]);

        bpjs::create([
            'jabatan' => 'Manager',
            'potongan' => 2,
        ]);

        bpjs::create([
            'jabatan' => 'Staff',
            'potongan' => 1,
        ]);

        tunjangan::create([
            'jabatan' => 'Manager',
            'tunjangan' => 500000,
        ]);

        tunjangan::create([
            'jabatan' => 'Staff',
            'tunjangan' => 300000,
        ]);

        pph::create([
            'jabatan' => 'Manager',
            'potongan' => 2,
        ]);

        pph::create([
            'jabatan' => 'Staff',
            'potongan' => 1,
        ]);

        ass_kec::create([
            'jabatan' => 'Manager',
            'potongan' => 2,
        ]);

        ass_kec::create([
            'jabatan' => 'Staff',
            'potongan' => 1,
        ]);

        ass_kem::create([
            'jabatan' => 'Manager',
            'potongan' => 2,
        ]);

        ass_kem::create([
            'jabatan' => 'Staff',
            'potongan' => 1,
        ]);

        iuran_pensiun::create([
            'jabatan' => 'Manager',
            'potongan' => 2,
        ]);

        iuran_pensiun::create([
            'jabatan' => 'Staff',
            'potongan' => 1,
        ]);

        iuran_organisasi::create([
            'jabatan' => 'Manager',
            'potongan' => 2,
        ]);

        iuran_organisasi::create([
            'jabatan' => 'Staff',
            'potongan' => 1,
        ]);

    }
}
