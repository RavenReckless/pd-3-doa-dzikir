<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dzikir_today',
        'dzikir_list',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
