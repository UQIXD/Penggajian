<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function potongan()
    {
        return $this->hasMany(potongan::class);

    }
}
