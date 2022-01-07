<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    // protected $guarded = ['id'];

    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class);
    }
}
