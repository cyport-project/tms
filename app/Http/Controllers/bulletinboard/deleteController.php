<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class bulletinboardController extends Controller
{

    //スレッド削除
    public function delete(Request $request)
    {
        $item = DB::table('thread')
             ->where('thread_id',$request->thread_id)->first();
        return view ('bulletinboard/list',['form' => $item]);
    }
    
}
    
