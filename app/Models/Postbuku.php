<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Postbuku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

    protected $fillable = ['title', 'description', 'image', 'user_id'];

    // Definisikan relasi antara Post dan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function home(){
        return $this->hasMany(home::class);
    }
}
