<?php

namespace App\Http\Controllers\personalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff;
use Illuminate\Support\Facades\Auth;


class listcontroller extends Controller
{
  public function __construct()
  {
        $this->middleware('auth');
  }
    //データベースからデータ取得
    public function list() {

      if(Auth::user()->mode == 1){
         $data = ['records' => staff::where('s_id', Auth::user()->s_id)->where('delete_flag', 0)-> get()];
      }else{
         $data = ['records' => staff:: where('delete_flag',0)->get() ];
      }


      return view('personalInformation.list', $data);
    }
}
