<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'release_date', 'ratings', 'keywords', 'storyline', 'taglines', 'image', 'video'];
}
