<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assistance extends Model
{
    use HasFactory,SoftDeletes;

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function beneficiaries()
    {
        return $this->belongsToMany(Beneficiary::class);
    }
}
