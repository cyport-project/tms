<?php

namespace App\Http\Controllers\bulletinboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    //�X���b�h�폜
    public function delete(Request $request)
    {
        $item = DB::table('thread')
             ->where('thread_id',$request->thread_id)->first();
        return view ('bulletinboard/list',['form' => $item]);
    }
    
}
    