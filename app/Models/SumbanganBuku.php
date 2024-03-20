<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumbanganBuku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Mahasiswa()
    {  
        return $this->belongsTo(Mahasiswa::class);
    }

    public function Petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
}
