<?php

namespace App\Models;

use App\Models\karyawan;
use App\Models\absensi;
use App\Models\bpjs;
use App\Models\tunjangan;
use App\Models\pph;
use App\Models\ass_kec;
use App\Models\ass_kem;
use App\Models\iuran_pensiun;
use App\Models\iuran_organisasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function karyawan()
    {
        return $this->belongsTo(karyawan::class);
    }

    public function absensi()
    {
        return $this->belongsTo(absensi::class);
    }

    public function bpjs()
    {
        return $this->belongsTo(bpjs::class);
    }

    public function tunjangan()
    {
        return $this->belongsTo(tunjangan::class);
    }

    public function pph()
    {
        return $this->belongsTo(pph::class);
    }

    public function ass_kec()
    {
        return $this->belongsTo(ass_kec::class);
    }

    public function ass_kem()
    {
        return $this->belongsTo(ass_kem::class);
    }

    public function iuran_pensiun()
    {
        return $this->belongsTo(iuran_pensiun::class);
    }

    public function iuran_organisasi()
    {
        return $this->belongsTo(iuran_organisasi::class);
    }
}
