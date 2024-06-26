<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo_path',
        'is_online'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dzikirGroups()
    {
        return $this->belongsToMany(DzikirGroup::class);
    }

    public function dzikirRecords()
    {
        return $this->hasMany(DzikirRecord::class);
    }

    public function spiritualMonitoring()
    {
        return $this->hasMany(SpiritualMonitoring::class);
    }

    public function communities()
    {
        return $this->belongsToMany(Community::class);
    }

    public function sharedExperiences()
    {
        return $this->hasMany(SharedExperience::class);
    }

    // Implementasi metode yang diperlukan oleh JWTSubject
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}

