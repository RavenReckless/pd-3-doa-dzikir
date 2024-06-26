<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DzikirRecord extends Model
{
    protected $fillable = ['materi_dzikir_id', 'title', 'file_path'];

    public function materiDzikir()
    {
        return $this->belongsTo(MateriDzikir::class);
    }
}
