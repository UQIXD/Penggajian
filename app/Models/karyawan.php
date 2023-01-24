<?php

namespace App\Models;

use App\Models\gaji;
use App\Models\detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function detail()
    {
        return $this->hasMany(detail::class);
    }

    public function gaji()
    {
        return $this->belongsTo(gaji::class);

    }
}
