<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class bulletinboardController extends Controller
{
    //
    public function list(){
    
    	$data=['threads' => thread:: all() ];
    
    	return view('bulletinboard.list',$data);
    }
    //
    public function register(){
  
    
 
    	return view('bulletinboard.register');
    }
    
    //
    public function contents(Request $request){
  
        $data['threads']=  thread:: all() ;
        $data['comments']= comment:: all() ;
        $thread_id = $request->thread_id;
	    $data['threads'] = DB::table('thread')->where('thread_id','=',$thread_id)->get();
	    $comment_id = $request->comment_id;
	    $data['comments'] = DB::table('comment')->where('thread_id','=',$thread_id)->get();
	    
    	return view('bulletinboard.contents',$data);
    }
    
    //
    public function create(Request $request) {
	
	$param = [
	'name' => $request->name,
	'message' => $request->message,
	'created_at' =>$request->now(),
	];
	
	DB::table('thread')->insert($param);
		
		return redirect('bulletinboard');
	}

    
}
    
