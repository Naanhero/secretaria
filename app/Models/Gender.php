<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public function users()
    {
        $this->hasMany(User::class); //relacion de muchos n - traigo la clase del modelo User
    }
}