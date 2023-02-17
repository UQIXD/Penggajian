<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class potongan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function karyawan()
    {
        return $this->hasMany(karyawan::class);
    }

    public function gaji()
    {
        return $this->belongsTo(gaji::class);
    }
}
