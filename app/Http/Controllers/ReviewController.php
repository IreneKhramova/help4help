<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
	public function showReviews() {
		return view('review');
	}

	public function addReview() {
		echo "Add review";
	}
}