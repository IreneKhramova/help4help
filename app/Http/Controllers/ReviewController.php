<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

	public function addReview(Request $request) {
		//здесь будет проверка $request->all()
		$review = new Review;
		/*if (Auth::check())
		{
    		// The user is logged in...
			$review->id_from = Auth::user()->id;
		}
		else
		{
			//return redirect регистрация/вход;
		}*/
		$review->id_from = $request->id_from;
		$review->text = $request->text;
		
		$review->save();
		return redirect('review');
	}

	public function getAddReview() {
		return view('addReview');
	}
}