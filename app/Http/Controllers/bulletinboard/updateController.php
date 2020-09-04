<?php

namespace App\Http\Controllers\bulletinboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    
    public function edit(Request $request) 
    {
    
    $item =DB::table('thread')
           ->where('thread_id', $reqest->thread_id)->first();
    return view('bulletinboard.edit',['form' =>$item]);)
    }
       
        public function update(Request $request) {
    
    $param = [
        '
        'thread_id'=>$request->thread_id,
        'name'=>$request->name,
        'message_j'=>$request-message,
    
     DB::table('thread')
           ->where('thread_id', $reqest->thread_id)
           ->update($param);
    return redirect('/bullentinboard');
    }
    
