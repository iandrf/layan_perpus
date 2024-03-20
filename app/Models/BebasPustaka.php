<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebasPustaka extends Model
{
    protected $fillable = ['file_path'];
    use HasFactory;

    // protected $guarded = ['id']

    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function Petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
    
}
