<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'last_name',
        'second_last_name',
        'type_id',
        'identification',
        'phone',
        'address',
        'gender_id',
        'email',
        'password',
        'position_id',
        'active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function beneficiary()
    {
        return $this->belongsToMany(Beneficiary::class);
    }
}
