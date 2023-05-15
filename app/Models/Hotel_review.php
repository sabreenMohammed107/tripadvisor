<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel_review extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_text',
        'review_date',
        'review_stars',
        'hotel_id',

    ];


}
