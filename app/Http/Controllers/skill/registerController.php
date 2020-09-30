<?php

namespace App\Http\Controllers\skill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff;
use App\skill_mst;
use App\constant_mst;
use App\staff_skill;
use App\staff_skill_detail;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
  //認証チェック
  public function __construct(){
    $this->middleware('auth');
  }
  public function create(){
    //定数の取得
    $data["_1"] =skill_mst::where('skill_id','<','0200' )
                -> where('delete_flag', 0) -> get();
    $data["_2"] =skill_mst::where('skill_id','>','0200' )
                -> where('skill_id','<','0300' )
                -> where('delete_flag', 0)-> get();
    $data["_3"] =skill_mst::where('skill_id','>','0300' )
                -> where('skill_id','<','0400' )
                -> where('delete_flag', 0)-> get();
    $data["_4"] =skill_mst::where('skill_id','>','0400' )
                -> where('skill_id','<','0500' )
                -> where('delete_flag', 0)-> get();
    $data["_5"] =skill_mst::where('skill_id','>','0500' )
                -> where('skill_id','<','0600' )
                -> where('delete_flag', 0)-> get();
    $data["_6"] =skill_mst::where('skill_id','>','0600' )
                -> where('skill_id','<','0700' )
                -> where('delete_flag', 0)-> get();
    $data["_7"] =skill_mst::where('skill_id','>','0700' )
                -> where('skill_id','<','0800' )
                -> where('delete_flag', 0)-> get();
    $data["_8"] =skill_mst::where('skill_id','>','0800' )
                -> where('skill_id','<','0900' )
                -> where('delete_flag', 0)-> get();
    $data["_9"] =skill_mst::where('skill_id','>','0900' )
                -> where('skill_id','<','1000' )
                -> where('delete_flag', 0)-> get();
    $data["_10"] =skill_mst::where('skill_id','>','1000' )
                -> where('skill_id','<','1100' )
                -> where('delete_flag', 0)-> get();
    $data["_11"] =skill_mst::where('skill_id','>','1100' )
                -> where('skill_id','<','1200' )
                -> where('delete_flag', 0)-> get();
    $data["_12"] =skill_mst::where('skill_id','>','1200' )
                -> where('skill_id','<','1300' )
                -> where('delete_flag', 0)-> get();
    $data["years"]=constant_mst::where('constant_id', '01401')
                ->orderby('display_order')
                ->pluck('name','value');

    $data['name']=staff::where('s_id', Auth::user()->s_id) -> first();
    if(isset($data['name'])){
      return view('skill.create', $data);
    }else{
      return redirect('home')
      ->withErrors("個人情報が未登録です。\n　先に登録を済ませてください。")
      ->withInput();
    }

  }
  public function register(Request $req){
    //skill情報登録

    $staff_skill=new staff_skill();
    $staff_skill->s_id = Auth::user()->s_id;
    $staff_skill->speciality=$req->speciality;
    $staff_skill->delete_flag=0;
    $staff_skill->save();

    //skill詳細情報登録
    //OSの登録
    $input=$req->all();
    foreach($input as $key => $value){
      \Log::info($key);
      if($key == "_token" || $key == "speciality"){
        continue;
      }elseif(isset($value)){
        $skill_detail= new staff_skill_detail();
        $skill_detail->s_id=Auth::user()->s_id;
        $skill_detail->skill_id=$key;
        $skill_detail->years=$value;
        $skill_detail->delete_flag=0;
        $skill_detail->save();
      }
    }
    return redirect('home');
  }
}
