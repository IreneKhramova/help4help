<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
	public function showReviews() {
		$n=4;
		$reviews = Review::orderBy('created_at', 'desc')->paginate($n);
        $reviews->transform(function ($review) {
            $review['user_from'] = $review->userFrom()->first();
  			return $review;
		});
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