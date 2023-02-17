<?php

namespace App\Http\Livewire\Potongan;

use App\Models\absensi;
use App\Models\gaji;
use App\Models\karyawan;
use App\Models\potongan as ModelsPotongan;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Potongan extends Component
{
    public $data = [];
    public $showEdit = false;
    public $pot_id;

    public function render()
    {
        $gaji = gaji::all();
        $karyawan = karyawan::all();
        $absensi = absensi::all();
        $potongan = ModelsPotongan::all();
        return view('livewire.potongan.potongan', [
            'karyawan' => $karyawan,
            'gaji' => $gaji,
            'absensi' => $absensi,
            'potongan' => $potongan,
        ]);
    }

    public function tambahPot()
    {
        $this->showEdit = false;
        $this->reset();
        $this->dispatchBrowserEvent('tampil-Pot');
    }

    public function createPot(){
        $validasi =  Validator::make($this->data, [
            'gaji_id' => 'required',
            'pot_pph' => 'required',
            'pot_ass_kec' => 'required',
            'pot_ass_kem' => 'required',
            'pot_iuran_tht' => 'required',
            'pot_iuran_pensiun' => 'required',
            'pot_iuran_organisasi' => 'required',
            'denda_terlambat' => 'required',
            'limit_izin' => 'required',
            'denda_izin' => 'required',
            'limit_cuti' => 'required',
            'denda_cuti' => 'required',
            'denda_alpha' => 'required',
        ])->validate();
        ModelsPotongan::create($validasi);
        $this->dispatchBrowserEvent('hide-tambah-pot',['message' => 'Data Potongan Berhasil disimpan']);
        return redirect()->back();
    }

    public function Rubah_pot(ModelsPotongan $potongan){
        $this->showEdit = true;
        $this->data = $potongan->toArray();
        $this->pot_id = $potongan->id;
        $this->dispatchBrowserEvent('tampil-rubah-pot');
    }

    public function updatePot()
    {
        $validasi =  Validator::make($this->data, [
            'gaji_id' => 'required',
            'pot_pph' => 'required',
            'pot_ass_kec' => 'required',
            'pot_ass_kem' => 'required',
            'pot_iuran_tht' => 'required',
            'pot_iuran_pensiun' => 'required',
            'pot_iuran_organisasi' => 'required',
            'denda_terlambat' => 'required',
            'limit_izin' => 'required',
            'denda_izin' => 'required',
            'limit_cuti' => 'required',
            'denda_cuti' => 'required',
            'denda_alpha' => 'required',
        ])->validate();

        $potongan = ModelsPotongan::findOrfail($this->pot_id);
        if($potongan){
            $potongan->update($validasi);
            $this->dispatchBrowserEvent('hide-tambah-pot',['message' => 'Data Potongan Berhasil dirubah']);
        }else{
            $this->dispatchBrowserEvent('pesan-pot', ['message' => 'Data Potongan Gagal dirubah']);
        }

        return redirect()->back();
    }


    public function Hapus_pot($pot_id){
        $this->pot_id = $pot_id;
        $this->dispatchBrowserEvent('tampil-hapus-pot');
    }

    public function hapusPot(){
        try {
            $potongan = ModelsPotongan::findOrfail($this->pot_id);
            $potongan->delete();
            $this->dispatchBrowserEvent('hide-hapus-pot',['message' => 'Data Potongan Berhasil dihapus']);
            return Redirect()->back();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('hide-hapus-pot',['message' => 'Data Potongan Gagal dihapus']);
        }
    }
}
