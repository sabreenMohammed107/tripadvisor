<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'overview',
        'address',
        'email',
        'phone',
        'facebook',
        'youtube',
        'instagram',
        'linkedin',
        'google_plus',
        'what_we_are',
        'where',
        'when',
        'google_map',

    ];
}
