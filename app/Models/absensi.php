<?php

namespace App\Models;

use App\Models\karyawan;
use App\Models\detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function detail()
    // {
    //     return $this->hasMany(detail::class);
    // }

    public function karyawan()
    {
        return $this->belongsTo(karyawan::class);
    }
}
