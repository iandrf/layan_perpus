<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function SumbanganBuku()
    {
        return $this->hasMany(SumbanganBuku::class);
    }

    public function PenyerahanKP()
    {
        return $this->hasMany(PenyerahanKP::class);
    }

    public function BebasPustaka()
    {
        return $this->hasMany(BebasPustaka::class);
    }
}
