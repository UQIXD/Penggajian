<?php

namespace App\Http\Livewire\Karyawan;

use App\Models\gaji;
use App\Models\karyawan;
use Livewire\Component;

class Karyawann extends Component
{
    public $data = [];
    public $showEdit = false;
    public $kry_id;
    // public $ttl;

    public function render()
    {
        $gaji = gaji::all();
        $karyawan = karyawan::all();
        return view('livewire.karyawan.karyawan', [
            'karyawan' => $karyawan,
            'gaji' => $gaji
        ]);
    }

    public function tambahKry()
    {
        $this->showEdit = false;
        $this->reset();
        // $this->ttl = date('d-m-Y');
        // $this->dispatchBrowserEvent('tampil-tambah');
    }

    public function createBrg(){
        $validasi =  Validator::make($this->data, [
            'namaBrg'   => 'required',
            'jenis_brg_id' => 'required',
            'stok'  => 'required',
            'hargaJual' => 'required'
        ])->validate();
        barang::create($validasi);
        $this->dispatchBrowserEvent('hide-tambah',['message' => 'Barang Berhasil disimpan']);
        return redirect()->back();
    }

    public function tampilRubah(karyawan $karyawan){
        $this->showEdit = true;
        $this->data = $karyawan->toArray();
        $this->kry_id = $karyawan->id;
        $this->dispatchBrowserEvent('tampil-tambah');
    }

    public function tampilHapus($barang_id){
        $this->barang_id = $barang_id;
        $this->dispatchBrowserEvent('tampil-hapus');
    }

    public function updateBrg(){
        $validasi =  Validator::make($this->data, [
            'namaBrg'   => 'required',
            'jenis_brg_id' => 'required',
            'stok'  => 'required',
            'hargaJual' => 'required'
        ])->validate();

        $barang = barang::findOrfail($this->barang_id);
        if($barang){
            $barang->update($validasi);
            $this->dispatchBrowserEvent('hide-tambah',['message' => 'Barang Berhasil dirubah']);
        }else{
            $this->dispatchBrowserEvent('pesan', ['message' => 'Barang Gagal dirubah']);
        }

        return redirect()->back();
    }

    public function hapusBrg(){
        try {
            $barang = barang::findOrfail($this->barang_id);
            $barang->delete();
            $this->dispatchBrowserEvent('hide-hapus',['message' => 'Barang Berhasil dihapus']);
            return Redirect()->back();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('hide-hapus',['message' => 'Barang Gagal dihapus']);
        }
    }
}
