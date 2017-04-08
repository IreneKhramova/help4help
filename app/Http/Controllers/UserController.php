<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function showProfile($id) {
		/*
			Здесь проверять, что id совпадает с id пользователя,
			который просматривает страницу,  и тогда выводить еще настройки.
			Или лучше сделать отдельно?
		*/
		return view('user/profile', ['id' => $id]);
	}
	public function editProfile($id) {
		return view('user/editProfile', ['id' => $id]);
	}
	//Оплата баллами
	public function bill($id1, $id2) {
		return view('user/bill');
	}
	public function addComment($id) {
		echo "Добавить отзыв о пользователе";
	}

	public function showTop() {
		return view('topRating');
	}
}