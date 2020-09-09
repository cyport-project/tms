<?php

namespace App\Http\Controllers\exp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff_experience;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class updateController extends Controller
{
  //認証チェック
  public function __construct()
  {
    $this->middleware('auth');
  }

  //編集画面表示
  public function update($id){
    $data['record']=staff_experience::where('id', $id) -> first();

    return view("exp.update",$data);
  }

  //データベース登録
  public function register(Request $req){

    //入力チェック
    $this->validate($req,staff_experience::$rules);

    \Log::info($req);
    $b = new staff_experience();
    empty($req->rd_p) ? $req->rd_p = 0 : $req->rd_p;
    empty($req->bd_p) ? $req->bd_p = 0 : $req->bd_p;
    empty($req->dd_p) ? $req->dd_p = 0 : $req->dd_p;
    empty($req->pg_p) ? $req->pg_p = 0 : $req->pg_p;
    empty($req->el_p) ? $req->el_p = 0 : $req->el_p;
    empty($req->mt_p) ? $req->mt_p = 0 : $req->mt_p;
    empty($req->op_p) ? $req->op_p = 0 : $req->op_p;


    DB::table('staff_experience')
           ->where('id', $req->id)
           ->update([
             's_id'=>Auth::user()->s_id,
             'start_period'=> $req->start_period,
             'end_period'=> $req->end_period,
             'industry'=> $req->industry,
             'pro_name'=> $req->pro_name,
             'pro_content'=> $req->pro_content,
             'content'=> $req->content,
             'mod_os'=> $req->mod_os,
             'db_dc'=> $req->db_dc,
             'lang_tool'=> $req->lang_tool,
             'rd_p'=> $req->rd_p,
             'bd_p'=> $req->bd_p,
             'dd_p'=> $req->dd_p,
             'pg_p'=> $req->pg_p,
             'el_p'=> $req->el_p,
             'mt_p'=> $req->mt_p,
             'op_p'=> $req->op_p,
             'delete_flag'=>'0',
           ]);
    return redirect("exp\list");
  }
}
