<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function beneficiaries()
    {
        return $this->belongsToMany(Beneficiary::class);
    }
}
