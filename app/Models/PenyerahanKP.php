<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyerahanKP extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;
    
    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function Petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
}
