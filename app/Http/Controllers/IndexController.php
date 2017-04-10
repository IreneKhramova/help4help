<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Need;
use App\Review;
use App\User;

class IndexController extends Controller
{
	public function getIndex() {
		$n=3;
		//нужно как-то выносить подобный код из контроллера в модель(или не в модель?)
		$needs = Need::where('status', '=', 'new')->orderBy('created_at', 'desc')->take($n)->get();
        $needs->transform(function ($need, $key) {
  			$need['category'] = $need->category()->first();
            $need['user_from'] = $need->userFrom()->first();
            $need['user_by'] = $need->userBy()->first();
  			return $need;
		});

		$reviews = Review::orderBy('created_at', 'desc')->take($n)->get();
        $reviews->transform(function ($review) {
            $review['user_from'] = $review->userFrom()->first();
  			return $review;
		});

		//$topUsers = ;
		return view('index', [
			'needs' => $needs, 
			'reviews' => $reviews, 
			/*'topUsers' => $topUsers*/
		]);
	}
}