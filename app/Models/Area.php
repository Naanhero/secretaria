<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function programs()
    {
       return $this->hasMany(Program::class); // una area contiene muchos programas
    }
}
