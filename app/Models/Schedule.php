<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'training_id',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}