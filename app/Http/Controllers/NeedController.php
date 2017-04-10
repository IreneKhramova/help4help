<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Need;

class NeedController extends Controller
{
	public function showNeedList() {
		$n=4;
		$needs = Need::where('status', '=', 'new')->orderBy('created_at', 'desc')->paginate($n);
        $needs->transform(function ($need, $key) {
  			$need['category'] = $need->category()->first();
            $need['user_from'] = $need->userFrom()->first();
            $need['user_by'] = $need->userBy()->first();
  			return $need;
		});
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
		$need['category'] = $need->category()->first();
        $need['user_from'] = $need->userFrom()->first();
        $need['user_by'] = $need->userBy()->first();

		return view('need/need', ['need' => $need]);
	}
}