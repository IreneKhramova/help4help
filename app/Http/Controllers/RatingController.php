<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RatingController extends Controller
{
	public function showTop() {
		return view('topRating');
	}
}