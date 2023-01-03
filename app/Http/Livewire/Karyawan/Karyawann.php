<?php

namespace App\Http\Livewire\Karyawan;

use App\Models\gaji;
use App\Models\karyawan;
use Livewire\Component;

class Karyawann extends Component
{
    public $data = [];
    public $showEdit = false;
    public $barang_id;
    public $ttl;

    public function render()
    {
        $gaji = gaji::all();
        $karyawan = karyawan::all();
        return view('livewire.karyawan.karyawan', [
            'karyawan' => $karyawan,
            'gaji' => $gaji
        ]);
    }

    public function tambahBrg()
    {
        $this->showEdit = false;
        $this->reset();
        $this->ttl = date('d-m-Y');
        $this->dispatchBrowserEvent('tampil-tambah');
    }
}
