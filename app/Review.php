<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id_from',
        'text'
    ];

    public function userFrom()
    {
        return $this->belongsTo('App\User', 'id_from');
    }
}
