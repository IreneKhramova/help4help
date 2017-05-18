<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Need;

class NeedController extends Controller
{
	public function showNeedList(Need $needModel) {
		$n=10;
		$needs = $needModel->getNeedList($n);
		return view('need/needList', ['needs' => $needs]);
	}

	public function showNeedListByUserFrom(Need $needModel, $id) {
		$n=10;
		$needs = $needModel->getNeedListByUserFrom($n, $id);
		return view('need/needList', ['needs' => $needs]);
	}

	public function showNeedListByUserBy(Need $needModel, $id) {
		$n=10;
		$needs = $needModel->getNeedListByUserBy($n, $id);
		return view('need/needList', ['needs' => $needs]);
	}

	public function createNeed(Request $request, Need $needModel) {
		$need = $needModel->store($request);
		return redirect()->route('need_view', $need->id);
	}

	public function getCreateNeed() {
		return view('need/create');
	}

	public function getUpdateNeed($id) {
		return view('need/update');
	}

	public function getDeleteNeed($id) {
		return view('need/delete');
	}

	public function updateNeed(Request $request) {
		
	}

	public function deleteNeed(Request $request) {
		
	}

	public function showNeed(Need $needModel, $id) {
		$need = $needModel->getNeed($id);
		return view('need/need', ['need' => $need]);
	}
}