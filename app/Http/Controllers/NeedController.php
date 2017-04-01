<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NeedController extends Controller
{
	public function showNeedList() {
		return view('need/needList');
	}

	public function createNeed() {
		return view('need/create');
		//echo "create";
	}

	public function updateNeed() {
		return view('need/update');
	}

	public function deleteNeed() {
		return view('need/delete');
	}

	public function showNeed($id) {
		return view('need/need', ['id' => $id]);
	}

}