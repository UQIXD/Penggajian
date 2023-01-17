<?php

namespace App\Http\Livewire\Gaji;

use App\Models\gaji as ModelsGaji;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Gaji extends Component
{
    public $data = [];
    public $showEdit = false;
    public $gaji_id;


    public function render()
    {
        $gaji = ModelsGaji::all();
        return view('livewire.gaji.gaji',[
            'gaji'    => $gaji,
        ]);
    }

    public function tambahGaji()
    {
        $this->showEdit = false;
        $this->reset();
        $this->dispatchBrowserEvent('tampil-Gaji');
    }

    public function createGaji(){
        $validasi =  Validator::make($this->data, [
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
        ])->validate();
        ModelsGaji::create($validasi);
        $this->dispatchBrowserEvent('hide-tambah-gaji',['message' => 'Data Karyawan Berhasil disimpan']);
        return redirect()->back();
    }

    public function tampilRubah(ModelsGaji $gaji){
        $this->showEdit = true;
        $this->data = $gaji->toArray();
        $this->gaji_id = $gaji->id;
        $this->dispatchBrowserEvent('tampil-rubah-gaji');
    }

    public function updateGaji(){
        $validasi =  Validator::make($this->data, [
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
        ])->validate();
        $gaji = ModelsGaji::findOrfail($this->gaji_id);
        if($gaji){
            $gaji->update($validasi);
            $this->dispatchBrowserEvent('hide-tambah-gaji',['message' => 'Data Gaji Berhasil dirubah']);
        }else{
            $this->dispatchBrowserEvent('pesan-gaji', ['message' => 'Data Gaji Gagal dirubah']);
        }

        return redirect()->back();
    }
}
