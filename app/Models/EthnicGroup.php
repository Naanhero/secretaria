<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EthnicGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function beneficiaries()
    {
        return $this->HasMany(Beneficiary::class);
    }

    public function beneficiariesByMonths()
    {
        return $this->HasMany(Beneficiary::class);
    }
}
