<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_text',
    'review_date',
    'review_stars',
    'trip_id',
    ];
}
