<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
	public function showReviews() {
		//$reviews = 
		return view('review', ['reviews' => $reviews]);
	}

	public function addReview() {
		/*$review = new Review;
		
		$review = Review::create($request->all());
		//echo "Add review";
		*/
		return redirect('');
	}
}