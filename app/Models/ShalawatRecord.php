<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShalawatRecord extends Model
{
    use HasFactory;

    protected $fillable = ['shalawat_id', 'title', 'file_path'];

    public function shalawat()
    {
        return $this->belongsTo(Shalawat::class);
    }
}
