<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'genre_id', 'release_date', 'ratings', 'keywords', 'taglines', 'language_id'];
}
