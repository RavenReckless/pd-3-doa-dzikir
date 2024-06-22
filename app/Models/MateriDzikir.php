<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriDzikir extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
        'title',
        'content',
        'image'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
