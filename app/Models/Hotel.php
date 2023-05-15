<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner',
    'title',
    'trip_brief',
    'overview',
    'cost',
    'address',
    'email',
    'phone',
    'facebook',
    'youtube',
    'instagram',
    'linkedin',
    'google_plus',

    ];

    public function review(){
        return $this->hasMany(Hotel_review::class);
      }
    public function avgRating()
    {
        return round($this->review()->avg('review_stars'),1);
    }
}
