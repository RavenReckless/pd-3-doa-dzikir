<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DzikirRecord extends Model
{
    protected $fillable = [
        'user_id',
        'dzikir_group_id',
        'file_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dzikirGroup()
    {
        return $this->belongsTo(DzikirGroup::class);
    }
}
