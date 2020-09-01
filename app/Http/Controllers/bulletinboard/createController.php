<?php

namespace App\Http\Controllers\bulletinboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class createController extends Controller
{
    //登録処理
    public function create(Request $request)
    {

        $param = new thread();

        $param->s_id = $request->name;
        $param->title = $request->title;
        $param->message = $request->message;
        $param->delete_flag = '0';

        $param->save();

        return redirect('bulletinboard\list');
    }

}
