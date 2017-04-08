<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id_from',
        'id_to',
        'text'
    ];
}
