<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendedDzikir extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'materi_dzikir_id'
    ];

    public function materDzikir() {
        return $this->belongsTo(MateriDzikir::class);
    }
}
