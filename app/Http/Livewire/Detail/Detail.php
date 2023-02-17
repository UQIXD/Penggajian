<?php

namespace App\Http\Livewire\Detail;

use App\Models\absensi;
use App\Models\detail as ModelsDetail;
use App\Models\gaji;
use App\Models\karyawan;
use App\Models\potongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use \Mpdf\Mpdf as PDF;
// use mPDF;
// use PDF;

use Livewire\Component;
use Mpdf\Mpdf as MpdfMpdf;

class Detail extends Component
{
    public $data = [];
    public $det_id;
    public $showEdit = false;

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

    public function rubahdetail(detail $detail)
    {
        $details = ModelsDetail::all();
        return view('livewire.detail.rubah', [
            'detail' => $detail,
            'details' => $details,
        ]);
    }

    public function createDet(Request $request)
    {
        $validasi = $request->validate([
            'karyawan_id' => 'required',
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
            'lembur' => 'required',
            'tunjangan' => 'required',
            'pph' => 'required',
            'ass_kec' => 'required',
            'ass_kem' => 'required',
            'iuran_tht' => 'required',
            'iuran_pensiun' => 'required',
            'iuran_organisasi' => 'required',
            'terlambat' => 'required',
            'izin' => 'required',
            'cuti' => 'required',
            'alpha' => 'required',
            'sakit' => '',
            'biaya' => '',
            'jum_bi' => '',
            'tot_pot' => 'required',
            'subtot' => 'required',
            'gtot' => 'required',
        ]);
        ModelsDetail::create($validasi);
        $this->dispatchBrowserEvent('hide-tambah-det',['message' => 'Data Detail Berhasil disimpan']);
        return redirect()->back();
    }

    public function editDet(Request $request, detail $detail)
    {
        $validasi = $request->validate([
            'karyawan_id' => 'required',
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
            'lembur' => 'required',
            'tunjangan' => 'required',
            'pph' => 'required',
            'ass_kec' => 'required',
            'ass_kem' => 'required',
            'iuran_tht' => 'required',
            'iuran_pensiun' => 'required',
            'iuran_organisasi' => 'required',
            'terlambat' => 'required',
            'izin' => 'required',
            'cuti' => 'required',
            'alpha' => 'required',
            'sakit' => '',
            'biaya' => '',
            'jum_bi' => '',
            'tot_pot' => 'required',
            'subtot' => 'required',
            'gtot' => 'required',
        ]);

        detail::whereId($detail->id)->update($validasi);
        return redirect()->back();
    }

    public function hapusdetail(detail $detail)
    {
        detail::destroy($detail->id);

        return redirect()->back();
    }

    public function cari_karyawan(absensi $absensi)
    {
        $karyawans = karyawan::where('id', $absensi->karyawan_id)->get();
        // $gaji = gaji::where('id', $absensi->potongan->gaji_id)->get();
        $absensis = absensi::where('id', $absensi->id)->get();
        $potongan = potongan::where('id', $absensi->karyawan->pot_id)->get();

        return response()->json(['karyawan' => $karyawans, 'absensi' => $absensis, 'potongan' => $potongan]);
    }

    public function cari_potongan(potongan $potongan)
    {
        // $karyawans = karyawan::where('id', $karyawan->id)->get();
        $gaji = gaji::where('id', $potongan->gaji_id)->get();
        // $absensis = absensi::where('id', $absensi->id)->get();
        $potongans = potongan::where('id', $potongan->id)->get();

        return response()->json(['gaji' => $gaji, 'potongan' => $potongans]);
    }

    public function cetaknota()
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

        $pdf = MpdfMpdf::loadview('berkas.nota',['slipGaji'=>$detail]);

        return $pdf->download('Slip Gaji.pdf');

    	// $pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
    	// return $pdf->download('laporan-pegawai-pdf');

    }
}
