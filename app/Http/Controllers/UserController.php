<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Comment;

class UserController extends Controller
{
	public function showProfile(User $userModel,Comment $commentModel, $id) {
		$user = $userModel->getUser($id);
		$n=10;
		$comments = $commentModel->getCommentList($n, $id);
		return view('user/profile', ['user' => $user, 'comments' => $comments]);
	}

	public function getEditProfile(User $userModel, $id) {
		$user = $userModel->getUser($id);
		return view('user/editProfile', ['user' => $user]);
	}

	public function postEditProfile($id) {
		return redirect()->action('UserController@showProfile', ['id' => $id]);
	}

	//Оплата баллами
	public function bill($id1, $id2) {
		return view('user/bill');
	}

	public function addComment(Request $request, Comment $commentModel, $id) {
		$comment = $commentModel->store($request, $id);
		return redirect()->action('UserController@showProfile', ['id' => $id]);
	}

	public function showTop(User $userModel) {
		$n=10;
		$topUsers = $userModel->getTopUsers($n);
		return view('topRating', ['topUsers' => $topUsers]);
	}
}