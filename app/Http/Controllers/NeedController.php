<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Need;

class NeedController extends Controller
{
	public function showNeedList() {
		//$needs = 
		return view('need/needList', ['needs' => $needs]);
	}

	public function createNeed(Request $request) {
		/*Need::createNeed($request->all());
		return redirect()->route('/need/', ['id' => $request->input('id')]);
		*/
	}

	public function updateNeed($id) {
		return view('need/update');
	}

	public function deleteNeed($id) {
		return view('need/delete');
	}

	public function showNeed($id) {
		$need = Need::find($id);
		return view('need/need', ['need' => $need]);
	}
}