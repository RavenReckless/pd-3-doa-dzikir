<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DzikirGroup extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function dzikirRecords()
    {
        return $this->hasMany(DzikirRecord::class);
    }
}

