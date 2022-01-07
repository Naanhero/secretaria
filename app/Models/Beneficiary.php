<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function assistances()
    {
        return $this->belongsToMany(Assistance::class);
    }

    public function ethnicGroup()
    {
        return $this->belongsTo(EthnicGroup::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
