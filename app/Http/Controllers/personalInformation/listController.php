<?php

namespace App\Http\Controllers\personalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class listController extends Controller
{
  public function __construct()
  {
        $this->middleware('auth');
  }
    //データベースからデータ取得
    public function list() {

      if(Auth::user()->mode == 1){
         $data = ['records' => staff::where('s_id', Auth::user()->s_id) -> where('delete_flag', 0) -> paginate(5)];
      }else{
         $data = ['records' => staff:: where('delete_flag',0) -> paginate(5)];
      }

      return view('personalInformation.list', $data);
    }
}
