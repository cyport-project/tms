<?php

namespace App\Http\Controllers\bulletinboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class listController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  //スレッド一覧表表示
  public function list()
  {
    $data['threads']=  thread::select('*') ->
        orderBy('created_at', 'desc')->get(); ;
    $data['comments']= comment:: all() ;

    return view('bulletinboard.list',$data);
  }
}
