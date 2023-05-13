<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner',
        'title',
        'trip_brief',
        'overview',
        'cost',
        'trip_date',

    ];

    public function review(){
        return $this->hasMany(Trip_review::class,'trip_id','id');
      }
    public function avgRating()
    {
        return round($this->review()->avg('review_stars'),1);
    }
}
