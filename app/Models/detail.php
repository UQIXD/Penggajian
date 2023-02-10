<?php

namespace App\Models;

use App\Models\karyawan;
use App\Models\absensi;
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

    // public function absensi()
    // {
    //     return $this->belongsTo(absensi::class);
    // }
}
