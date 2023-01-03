<?php

namespace Database\Seeders;

use App\Models\karyawan;
use App\Models\User;
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
        ]);
    }
}
