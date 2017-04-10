<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    protected $fillable = [
        'id_from',
        'text',
        'category_id',
        'points'
    ];

    public function userFrom()
    {
        return $this->belongsTo('App\User', 'id_from');
    }

    public function userBy()
    {
        return $this->belongsTo('App\User', 'id_by');
    }

    public function category()
    {
        return $this->belongsTo('App\NeedCategory', 'category_id');
    }
}
