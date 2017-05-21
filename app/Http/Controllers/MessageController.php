<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
	public function showDialog(Message $messageModel, $id)
	{
		//$id - id пользователя, с которым ведется переписка
		$n=10;
		$messages = $messageModel->getMessageList($n, $id);
		return view('dialog', ['messages' => $messages, 'id' => $id]);
	}

	public function sendMessage(Request $request, Message $messageModel, $id)
	{
		$message = $messageModel->store($request, $id);
		return redirect()->action('MessageController@showDialog', ['id' => $id]);
	}
}