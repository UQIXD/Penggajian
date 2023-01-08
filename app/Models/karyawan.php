<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];

    protected $fillable = ['nm_karyawan','jns_karyawan','agama','ttl','no_telpon','status','alamat','kewarganegaraan','foto','gaji_id'];

    public function gaji()
    {
        return $this->belongsTo(gaji::class);

    }
}
