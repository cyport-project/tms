<?php

namespace App\Http\Controllers\exp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff_experience;
use App\staff;
use Illuminate\Support\Facades\Auth;

class listController extends Controller
{
  public function list(){
    //経験情報を読み込む
    $data['name']=staff::where('s_id', Auth::user()->s_id) -> first();
    $data['records'] =staff_experience::where('s_id', Auth::user()->s_id) -> where('delete_flag', 0) -> paginate(15);

    //ビューの呼びだし
    return view('exp.list',$data);
  }
}
