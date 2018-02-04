<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name', 'release_date', 'ratings', 'keywords', 'storyline',
        'taglines', 'image', 'video', 'language_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country()
    {
        return $this->hasOne(Country::class, 'id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
