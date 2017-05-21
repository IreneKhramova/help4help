<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Message extends Model
{
    protected $fillable = [
        'id_from',
        'id_to',
        'text'
    ];

    public function userFrom()
    {
        return $this->belongsTo('App\User', 'id_from');
    }

    public function userTo()
    {
        return $this->belongsTo('App\User', 'id_to');
    }

    public function getMessageList($n, $id)
    {
        if (Auth::check())
        {
            // The user is logged in...
            $id_user = Auth::user()->id;
        }
        else
        {
            //регистрация/вход;
            return redirect('/#7');
        }
        $messages = Message::where([
            ['id_from', '=', $id_user], 
            ['id_to', '=', $id],
            ])->orWhere([
                ['id_from', '=', $id], 
                ['id_to', '=', $id_user],
            ])->orderBy('created_at', 'desc')->paginate($n);
        $messages->transform(function ($message, $key) {
            $message['user_from'] = $message->userFrom()->first();
            $message['user_to'] = $message->userTo()->first();
            return $message;
        });
        return $messages;
    }

    public function store(Request $request, $id)
    {
        //здесь будет проверка $request
        $message = new message;
        if (Auth::check())
        {
            // The user is logged in...
            $message->id_from = Auth::user()->id;
        }
        else
        {
            //регистрация/вход;
            return redirect('/#7');
        }
        $message->text = $request->text;
        
        $message->id_to = $id;
        
        $message->save();
        return $message;
    }
}
