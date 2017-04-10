<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function showProfile($id) {
		/*
			Здесь проверять, что id совпадает с id пользователя,
			который просматривает страницу,  и тогда выводить еще настройки.
			Или лучше сделать отдельно?
		*/
		$user = User::find($id);
		return view('user/profile', ['user' => $user]);
	}

	public function editProfile($id) {
		return redirect->action('UserController@showProfile', ['id' => $id]);
	}

	//Оплата баллами
	public function bill($id1, $id2) {
		return view('user/bill');
	}

	public function addComment($id) {
		//echo "Добавить отзыв о пользователе";
		return redirect->action('UserController@showProfile', ['id' => $id]);
	}

	public function showTop() {
		return view('topRating');
	}
}