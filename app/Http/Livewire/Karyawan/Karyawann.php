<?php

namespace App\Http\Livewire\Karyawan;

use App\Models\gaji;
use App\Models\karyawan;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Karyawann extends Component
{
    public $data = [];
    public $showEdit = false;
    public $kry_id;

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
        $this->dispatchBrowserEvent('tampil-Kry');
    }

    public function createKry(){
        $validasi =  Validator::make($this->data, [
            'nm_karyawan' => 'required',
            'jns_kelamin' => 'required',
            'agama' => 'required',   
            'ttl' =>   'required',
            'no_telpon' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'kewarganegaraan' => 'required',
            // 'foto' => 'required',
            'gaji_id' => 'required',
        ])->validate();
        karyawan::create($validasi);
        $this->dispatchBrowserEvent('hide-tambah-kry',['message' => 'Data Karyawan Berhasil disimpan']);
        return redirect()->back();
    }

    public function tampilRubah(karyawan $karyawan){
        $this->showEdit = true;
        $this->data = $karyawan->toArray();
        $this->kry_id = $karyawan->id;
        $this->dispatchBrowserEvent('tampil-tambah');
    }

    public function updateKry(){

        $validasi =  Validator::make($this->data, [
            'nm_karyawan' => 'required',
            'jns_kelamin' => 'required',
            'agama' => 'required',
            'ttl' => 'required',
            'no_telpon' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'kewarganegaraan' => 'required',
            // 'foto' => 'required',
            'gaji_id' => 'required',
        ])->validate();

        $karyawan = karyawan::findOrfail($this->karyawan_id);
        if($karyawan){
            $karyawan->update($validasi);
            $this->dispatchBrowserEvent('hide-tambah',['message' => 'Data Karyawan Berhasil dirubah']);
        }else{
            $this->dispatchBrowserEvent('pesan', ['message' => 'Data Karyawan Gagal dirubah']);
        }

        return redirect()->back();
    }


    // public function tampilHapus($barang_id){
    //     $this->barang_id = $barang_id;
    //     $this->dispatchBrowserEvent('tampil-hapus');
    // }

    // public function hapusBrg(){
    //     try {
    //         $barang = barang::findOrfail($this->barang_id);
    //         $barang->delete();
    //         $this->dispatchBrowserEvent('hide-hapus',['message' => 'Barang Berhasil dihapus']);
    //         return Redirect()->back();
    //     } catch (\Throwable $th) {
    //         $this->dispatchBrowserEvent('hide-hapus',['message' => 'Barang Gagal dihapus']);
    //     }
    // }

}
