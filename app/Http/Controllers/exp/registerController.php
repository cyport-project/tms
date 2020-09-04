<?php

namespace App\Http\Controllers\exp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff_experience;

class registerController extends Controller
{
    //入力画面表示
    public function create(){

      return view("exp.create");
    }
    //データベース登録
    public function register(Request $req){

      //入力チェック
      $this->validate($req,staff_experience::$rules);

      $b = new staff_experience();
      $b->delete_flag= '0';
      $b->save();
      return redirect("exp\list");
    }
}
