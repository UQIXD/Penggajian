<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;

    protected $fillable = ['nm_departemen'];

    public function gaji(){
        return $this->hasMany(gaji::class);
    }
}
