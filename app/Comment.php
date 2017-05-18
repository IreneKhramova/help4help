<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Comment extends Model
{
    protected $fillable = [
        'id_from',
        'id_to',
        'text',
        'rating'
    ];

    public function userFrom()
    {
        return $this->belongsTo('App\User', 'id_from');
    }

    public function userTo()
    {
        return $this->belongsTo('App\User', 'id_to');
    }

    public function getCommentList($n, $id)
    {
        $comments = Comment::where('id_to', '=', $id)->orderBy('created_at', 'desc')->paginate($n);
        $comments->transform(function ($comment, $key) {
            $comment['user_from'] = $comment->userFrom()->first();
            return $comment;
        });
        return $comments;
    }

    public function store(Request $request, $id)
    {
        //здесь будет проверка $request
        $comment = new Comment;
        if (Auth::check())
        {
            // The user is logged in...
            $comment->id_from = Auth::user()->id;
        }
        else
        {
            //регистрация/вход;
            return redirect('/#7');
        }
        $comment->text = $request->text;
        $comment->rating = $request->rating;
        $comment->id_to = $id;
        
        $comment->save();
        return $comment;
    }
}
