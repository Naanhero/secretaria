<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beneficiary extends Model
{
    use HasFactory,SoftDeletes;

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
    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
    public function stratum()
    {
        return $this->belongsTo(Stratum::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
