<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'answers',
        'analysis',
        'dominant_moods',
    ];

    protected $casts = [
        'answers' => 'array',
        'dominant_moods' => 'array',
    ];
}
