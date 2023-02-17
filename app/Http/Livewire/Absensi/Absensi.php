<?php

namespace App\Http\Livewire\Absensi;

use App\Models\absensi as ModelsAbsensi;
use App\Models\karyawan;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Absensi extends Component
{
    public $data = [];
    public $showEdit = false;
    public $abs_id;

    public function render()
    {
        $karyawan = karyawan::all();
        $absensi = ModelsAbsensi::all();
        return view('livewire.absensi.absensi', [
            'karyawan' => $karyawan,
            'absensi' => $absensi,
        ]);
    }

    public function cari_kar(karyawan $karyawan)
    {
        $karyawans = karyawan::where('id', $karyawan->id)->get();

        return response()->json(['karyawan' => $karyawans]);
    }

    public function tambahAbs()
    {
        $this->showEdit = false;
        $this->reset();
        $this->dispatchBrowserEvent('tampil-Abs');
    }

    public function createAbs()
    {
        $validasi =  Validator::make($this->data, [
            'karyawan_id' => 'required',
            'bulan' => 'required',
            'terlambat' => 'required',
            'lembur' => 'required',
            'sakit' => 'required',
            'izin' => 'required',
            'cuti' => 'required',
            'alpha' => 'required',
            // 'denda' => 'required',
            // 'gajiLembur' => 'required',
        ])->validate();
        ModelsAbsensi::create($validasi);

        // $absensi = ModelsAbsensi::findOrfail($this->abs_id);
        // if($absensi){
        //     $absensi->update($validasi);
        //     $this->dispatchBrowserEvent('hide-tambah-abs',['message' => 'Data Absensi Berhasil dirubah']);
        // }else{
        //     $this->dispatchBrowserEvent('pesan-abs', ['message' => 'Data Absensi Gagal dirubah']);
        // }

        $this->dispatchBrowserEvent('hide-tambah-abs',['message' => 'Data Absensi Berhasil disimpan']);
        return redirect()->back();
    }

    public function Rubah_abs(ModelsAbsensi $absensi){
        $this->showEdit = true;
        $this->data = $absensi->toArray();
        $this->abs_id = $absensi->id;
        $this->dispatchBrowserEvent('tampil-rubah-abs');
    }

    public function updateAbs(){

        $validasi =  Validator::make($this->data, [
            'karyawan_id' => 'required',
            'bulan' => 'required',
            'terlambat' => 'required',
            'lembur' => 'required',
            'sakit' => 'required',
            'izin' => 'required',
            'cuti' => 'required',
            'alpha' => 'required',
            // 'denda' => 'required',
            // 'gajiLembur' => 'required',
        ])->validate();
        $absensi = ModelsAbsensi::findOrfail($this->abs_id);
        if($absensi){
            $absensi->update($validasi);
            $this->dispatchBrowserEvent('hide-tambah-abs',['message' => 'Data Absensi Berhasil dirubah']);
        }else{
            $this->dispatchBrowserEvent('pesan-abs', ['message' => 'Data Absensi Gagal dirubah']);
        }

        return redirect()->back();
    }


    public function Hapus_abs($abs_id){
        $this->abs_id = $abs_id;
        $this->dispatchBrowserEvent('tampil-hapus-abs');
    }

    public function hapusAbs(){
        try {
            $absensi = ModelsAbsensi::findOrfail($this->abs_id);
            $absensi->delete();
            $this->dispatchBrowserEvent('hide-hapus-abs',['message' => 'Data Absensi Berhasil dihapus']);
            return Redirect()->back();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('hide-hapus-abs',['message' => 'Data Absensi Gagal dihapus']);
        }
    }
}
