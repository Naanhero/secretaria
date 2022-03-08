<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stratum extends Model
{
    use HasFactory;

    protected $table = "stratums";

    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class);
    }
}
