<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class bulletinboardController extends Controller
{

    //ƒRƒ“ƒeƒ“ƒc
    public function contents(Request $request)
    {
        $data['threads']=  thread:: all() ;
        $data['comments']= comment:: all() ;
        $thread_id = $request->thread_id;
        $data['threads'] = DB::table('thread')->where('thread_id','=',$thread_id)->get();
        $comment_id = $request->comment_id;
        $data['comments'] = DB::table('comment')->where('thread_id','=',$thread_id)->get();

        return view('bulletinboard.contents',$data);
    }

}
    
