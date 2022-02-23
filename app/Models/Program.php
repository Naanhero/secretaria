<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    protected $dates = ['start_date','end_date'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function cities()
    {
        return $this->belongsToMany(City::class);
    }

    public function activities()
    {
       return $this->hasMany(Activity::class); // un programa contiene muchas actividades
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
