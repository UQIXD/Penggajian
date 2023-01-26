<?php

namespace App\Http\Livewire\Detail;

use App\Models\ass_kec;
use App\Models\ass_kem;
use App\Models\bpjs;
use App\Models\detail as ModelsDetail;
use App\Models\gaji;
use App\Models\iuran_organisasi;
use App\Models\iuran_pensiun;
use App\Models\jabatan;
use App\Models\karyawan;
use App\Models\pph;
use App\Models\tunjangan;
use Illuminate\Support\Facades\Validator;

use Livewire\Component;

class Detail extends Component
{
    public $data = [];
    public $det_id;

    public function render()
    {
        $gaji = gaji::all();
        $karyawan = karyawan::all();
        $detail = ModelsDetail::all();
        $bpjs = bpjs::all();
        $ass_kec = ass_kec::all();
        $ass_kem = ass_kem::all();
        $iuran_organisasi = iuran_organisasi::all();
        $iuran_pensiun = iuran_pensiun::all();
        $pph = pph::all();
        $tunjangan = tunjangan::all();
        $jabatan = jabatan::all();
        return view('livewire.detail.detail', [
            'karyawan' => $karyawan,
            'gaji' => $gaji,
            'detail' => $detail,
            'jabatan' => $jabatan,
            'bpjs' => $bpjs,
            'ass_kec' => $ass_kec,
            'ass_kem' => $ass_kem,
            'iuran_organisasi' => $iuran_organisasi,
            'iuran_pensiun' => $iuran_pensiun,
            'pph' => $pph,
            'tunjangan' => $tunjangan,
        ]);
    }

    public function tambahdetail()
    {
        $gaji = gaji::all();
        $karyawan = karyawan::all();
        $detail = ModelsDetail::all();
        $bpjs = bpjs::all();
        $ass_kec = ass_kec::all();
        $ass_kem = ass_kem::all();
        $iuran_organisasi = iuran_organisasi::all();
        $iuran_pensiun = iuran_pensiun::all();
        $pph = pph::all();
        $tunjangan = tunjangan::all();
        $jabatan = jabatan::all();
        return view('livewire.detail.tambah', [
            'karyawan' => $karyawan,
            'gaji' => $gaji,
            'detail' => $detail,
            'jabatan' => $jabatan,
            'bpjs' => $bpjs,
            'ass_kec' => $ass_kec,
            'ass_kem' => $ass_kem,
            'iuran_organisasi' => $iuran_organisasi,
            'iuran_pensiun' => $iuran_pensiun,
            'pph' => $pph,
            'tunjangan' => $tunjangan,
        ]);
    }

    public function createDet(){
        $validasi =  Validator::make($this->data, [
        ])->validate();
        karyawan::create($validasi);
        $this->dispatchBrowserEvent('hide-tambah-det',['message' => 'Data Karyawan Berhasil disimpan']);
        return redirect()->back();
    }
}
