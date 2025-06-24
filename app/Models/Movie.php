<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'duration',
    	'release_date',
    	'language',
    	'genre',
    	'rating',
    	'image',
    	'price',

    ];


    public function showtimes()
    {
        $this->belongsTo(showTime::class, 'movie_id');
    }
}
