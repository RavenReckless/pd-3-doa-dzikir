<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpiritualMonitoring extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'consistency',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

