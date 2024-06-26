<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DzikirRecord extends Model
{
    protected $fillable = [
        'nama',
        'file_path',
    ];
}
