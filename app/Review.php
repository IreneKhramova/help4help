<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id_from',
        'text'
    ];

    public function getNewReviews($n)
    {
    	$reviews = Review::orderBy('created_at', 'desc')->take($n)->get();
    	return $reviews;
    }
}
