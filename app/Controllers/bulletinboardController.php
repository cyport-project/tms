<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thread;
use App\comment;

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
    public function contents(){
  
        $data['threads']=  thread:: all() ;
        $data['comments']= comment:: all() ;

    	return view('bulletinboard.contents',$data);
    }
    
    
}
    
