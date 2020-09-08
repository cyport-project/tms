<?php

namespace App\Http\Controllers\exp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\staff_experience;
use App\staff;

class registerController extends Controller
{
    //入力画面表示
    public function create(){
      $data['name']=staff::where('s_id', Auth::user()->s_id) -> first();
      if(isset($data['name'])){
            return view("exp.create",$data);
      }else{
            return redirect('home');
      }


    }
    //データベース登録
    public function register(Request $req){

      //入力チェック
      $this->validate($req,staff_experience::$rules);

      $b = new staff_experience();

      $b->s_id = Auth::user()->s_id;
      $b->start_period=$req->start_period;
      $b->end_period=$req->end_period;
      $b->industry=$req->industry;
      $b->pro_name=$req->pro_name;
      $b->pro_content=$req->pro_content;
      $b->content=$req->content;
      $b->mod_os=$req->mod_os;
      $b->db_dc=$req->db_dc;
      $b->lang_tool=$req->lang_tool;
      if($req->rd_p == 'on'){
        $b->rd_p = '1';
      }else{
        $b->rd_p = '0';
      }

      if($req->bd_p == 'on'){
        $b->bd_p = '1';
      }else{
        $b->bd_p = '0';
      }

      if($req->dd_p == 'on'){
        $b->dd_p = '1';
      }else{
        $b->dd_p = '0';
      }

      if($req->pg_p == 'on'){
        $b->pg_p = '1';
      }else{
        $b->pg_p = '0';
      }

      if($req->el_p == 'on'){
        $b->el_p = '1';
      }else{
        $b->el_p = '0';
      }

      if($req->mt_p == 'on'){
        $b->mt_p = '1';
      }else{
        $b->mt_p = '0';
      }

      if($req->op_p == 'on'){
        $b->op_p = '1';
      }else{
        $b->op_p = '0';
      }

      $b->delete_flag = '0';
      $b -> save();
      return redirect("exp\list");
    }
}
