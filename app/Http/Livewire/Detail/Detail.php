<?php

namespace App\Http\Livewire\Detail;

use App\Models\absensi;
use App\Models\detail as ModelsDetail;
use App\Models\gaji;
use App\Models\karyawan;
use Illuminate\Support\Facades\Validator;
// use \Mpdf\Mpdf as PDF;
use mPDF;

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
        $absensi = absensi::all();
        return view('livewire.detail.detail', [
            'karyawan' => $karyawan,
            'gaji' => $gaji,
            'detail' => $detail,
            'absensi' => $absensi,
        ]);
    }

    public function tambahdetail()
    {
        $gaji = gaji::all();
        $karyawan = karyawan::all();
        $detail = ModelsDetail::all();
        $absensi = absensi::all();
        return view('livewire.detail.tambah', [
            'karyawan' => $karyawan,
            'gaji' => $gaji,
            'detail' => $detail,
            'absensi' => $absensi,
        ]);
    }

    public function cari_karyawan(karyawan $karyawan)
    {
        $karyawans = karyawan::where('id', $karyawan->id)->get();
        $gaji = gaji::where('id', $karyawan->gaji_id)->get();
        $absensis = absensi::where('id', $karyawan->absensi_id)->get();

        return response()->json(['karyawan' => $karyawans, 'gaji' => $gaji, 'absensi' => $absensis]);
    }

    public function createDet(){
        $validasi =  Validator::make($this->data, [
            'karyawan_id' => 'required',
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
            'lembur' => 'required',
            'tunjangan' => 'required',
            'pph' => 'required',
            'bpjs' => 'required',
            'ass_kec' => 'required',
            'ass_kem' => 'required',
            'iuran_pensiun' => 'required',
            'iuran_organisasi' => 'required',
            'terlambat' => 'required',
            'izin' => 'required',
            'cuti' => 'required',
            'alpha' => 'required',
            // 'sakit' => 'required',
            'biaya' => 'required',
            'jum_bi' => 'required',
            'tot_pot' => 'required',
            'subtot' => 'required',
            'gtot' => 'required',
        ])->validate();
        ModelsDetail::create($validasi);
        $this->dispatchBrowserEvent('hide-tambah-det',['message' => 'Data Detail Berhasil disimpan']);
        return redirect()->back();
    }

    public function cetaknota(){

        $gaji = gaji::all();
        $karyawan = karyawan::all();
        $detail = ModelsDetail::all();
        $absensi = absensi::all();
        return view('livewire.detail.tambah', [
            'karyawan' => $karyawan,
            'gaji' => $gaji,
            'detail' => $detail,
            'absensi' => $absensi,
        ]);
        $hasil = [
            // 'hasil' => $detail,
        ];

        // $pdf = mPDF::loadview('berkas.nota', $hasil);

        // return $pdf->stream('nota.pdf');

    }
}
