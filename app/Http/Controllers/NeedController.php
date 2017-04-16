<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Need;
use App\NeedCategory;
use Illuminate\Support\Facades\Auth;

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
		//здесь будет проверка $request
		$need = new Need;
		/*if (Auth::check())
		{
    		// The user is logged in...
			$need->id_from = Auth::user()->id;
		}
		else
		{
			//return redirect регистрация/вход;
		}*/
		$need->id_from = $request->id_from;
		$need->text = $request->text;
		//что, если такой категории нет? Может, сделать select в форме вместо input?
		$need->category_id = NeedCategory::where('name', '=', $request->category)->firstOrFail()->id;
		$need->points = $request->points;
		
		$need->save();
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

	public function showNeed($id) {
		$need = Need::find($id);
		$need['category'] = $need->category()->first();
        $need['user_from'] = $need->userFrom()->first();
        $need['user_by'] = $need->userBy()->first();

		return view('need/need', ['need' => $need]);
	}
}