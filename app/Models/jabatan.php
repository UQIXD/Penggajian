<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;

    protected $fillable = ['posisi_jabatan','tunjangan_jabatan'];

    public function gaji(){
        return $this->hasMany(gaji::class);
    }
}
