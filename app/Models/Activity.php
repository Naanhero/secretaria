<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    protected $dates = ['start_date','end_date'];

    public function program()
    {
        return $this->belongsTo(Program::class); // a un programa pertenece solo una actividad
    }

    public function assistance()
    {
        return $this->hasOne(Assistance::class);
    }
}
