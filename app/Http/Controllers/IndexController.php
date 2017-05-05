<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Need;
use App\Review;
use App\User;

class IndexController extends Controller
{
	public function getIndex(Need $needModel, Review $reviewModel) {
		$n=3;
		$needs = $needModel->getNeedList($n);

		$reviews = $reviewModel->getReviews($n);
		//$topUsers = ;
		return view('index', [
			'needs' => $needs, 
			'reviews' => $reviews, 
			/*'topUsers' => $topUsers*/
		]);
	}
}