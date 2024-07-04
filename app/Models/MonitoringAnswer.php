<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonitoringAnswer extends Model
{
    protected $fillable = ['dzikir_today', 'dzikir_list'];

    public function monitoring()
    {
        return $this->belongsTo(Monitoring::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}