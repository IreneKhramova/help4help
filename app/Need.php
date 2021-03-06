<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\NeedCategory;
use App\User;

class Need extends Model
{
    protected $fillable = [
        'id_from',
        'text',
        'category_id',
        'points'
    ];

    public function userFrom()
    {
        return $this->belongsTo('App\User', 'id_from');
    }

    public function userBy()
    {
        return $this->belongsTo('App\User', 'id_by');
    }

    public function category()
    {
        return $this->belongsTo('App\NeedCategory', 'category_id');
    }
/* Не работает: undefined function App/transf()
    public function transf($needs)
    {
        $needs->transform(function ($need, $key) {
            $need['category'] = $need->category()->first();
            $need['user_from'] = $need->userFrom()->first();
            $need['user_by'] = $need->userBy()->first();
            return $need;
        });
        return $needs;
    }
*/
    public function getNeedList($n)
    {
        $needs = Need::where('status', '=', 'new')->orderBy('updated_at', 'desc')->paginate($n);
        $needs->transform(function ($need, $key) {
            $need['category'] = $need->category()->first();
            $need['user_from'] = $need->userFrom()->first();
            $need['user_by'] = $need->userBy()->first();
            return $need;
        });
        return $needs;
        //return transf($needs);
    }

    public function getNeedListByUserFrom($n, $id)
    {
        $needs = Need::where('id_from', '=', $id)->orderBy('updated_at', 'desc')->paginate($n);
        $needs->transform(function ($need, $key) {
            $need['category'] = $need->category()->first();
            $need['user_from'] = $need->userFrom()->first();
            $need['user_by'] = $need->userBy()->first();
            return $need;
        });
        return $needs;
        //return transf($needs);
    }

    public function getNeedListByUserBy($n, $id)
    {
        $needs = Need::where('id_by', '=', $id)->orderBy('updated_at', 'desc')->paginate($n);
        $needs->transform(function ($need, $key) {
            $need['category'] = $need->category()->first();
            $need['user_from'] = $need->userFrom()->first();
            $need['user_by'] = $need->userBy()->first();
            return $need;
        });
        return $needs;
        //return transf($needs);
    }

    public function store(Request $request)
    {
        //здесь будет проверка $request
        $need = new Need;
        if (Auth::check())
        {
            // The user is logged in...
            $need->id_from = Auth::user()->id;
        }
        else
        {
            //регистрация/вход;
            return redirect('/#7');
        }
        $need->text = $request->text;
        //что, если такой категории нет? Может, сделать select в форме вместо input?
        $need->category_id = NeedCategory::where('name', '=', $request->category)->firstOrFail()->id;
        $need->points = $request->points;
        
        $need->save();
        return $need;
    }

    public function getNeed($id)
    {
        $need = Need::find($id);
        $need['category'] = $need->category()->first();
        $need['user_from'] = $need->userFrom()->first();
        $need['user_by'] = $need->userBy()->first();
        return $need;
    }

/*    public function updateNeed($data, $id) //Response $request
    {
        $need = Need::find($id);
        foreach ($data as $key => $$value) 
        {
            $need->$key = $value;
        }
        unset($value); //разорвать ссылку на последний элемент
        $need->save();
        return $need;
    }*/

    public function executeNeed($id)
    {
        $need = Need::find($id);
        $need->status = 'execute';
        $need->id_by = Auth::user()->id;
        $need->save();
        //Пользователю, опубликовавшему задание должно бы прийти уведомление
        return $need;
    }

    public function completeNeed($id)
    {
        DB::transaction(function() use ($id){
            $need = Need::find($id);
            $need->status = 'closed';
            $need->save();

            User::bill($need->id_from, $need->id_by, $need->points);
        });
        //Пользователю, выполнившему задание должно бы прийти уведомление
    }
}
