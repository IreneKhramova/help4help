<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id_from',
        'id_to',
        'text',
        'rating'
    ];
}
