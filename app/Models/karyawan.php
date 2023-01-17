<?php

namespace App\Models;

use App\Models\gaji;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gaji()
    {
        return $this->belongsTo(gaji::class);

    }
}
