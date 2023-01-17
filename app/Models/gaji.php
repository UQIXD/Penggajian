<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['bulan','tahun','masa_kerja','departemen_id','jabatan_id','tj_anak','tj_istri','total'];

    public function karyawan()
    {
        return $this->hasMany(karyawan::class);

    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);

    }

    public function jabatan()
    {
        return $this->belongsTo(jabatan::class);

    }
}
