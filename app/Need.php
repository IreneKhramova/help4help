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

    public function getNewNeeds($n)
    {
    	$needs = Need::orderBy('created_at', 'desc')->having('status', '=', 'new')->take($n)->get();
    	return $needs;
    }
}
