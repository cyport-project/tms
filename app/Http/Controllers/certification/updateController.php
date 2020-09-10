<?php

namespace App\Http\Controllers\certification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff_certification;
use App\staff;
use App\certification_mst;
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
    $data['record'] = DB::table('staff_certification')
                        ->join('certification_mst', 'certification_id', '=', 'certification_mst.key2')
                        ->select('staff_certification.*', 'certification_mst.value2')
                        ->where('id',Auth::user()->id)
                        ->first();
    $data["categories"]=certification_mst::distinct()->select('key1','value1')->get();
    $data["certifications"]=certification_mst::all();

    return view("certification.update",$data);
  }

  //データベース登録
  public function register(Request $req){

    //入力チェック
    $this->validate($req,staff_certification::$rules);

    //テーブルの更新
    DB::table('staff_certification')
           ->where('id',Auth::user()->id)
           ->update([
             's_id'=>Auth::user()->s_id,
             'certification_id'=> $req->certification_id,
             'certification_date'=> $req->certification_date,
             'notices'=> $req->notice,
             'delete_flag'=>'0',
           ]);

   //経験情報を読み込む
   $data['name']=staff::where('s_id', Auth::user()->s_id) -> first();
   $data['records'] = DB::table('staff_certification')
                      ->join('certification_mst', 'certification_id', '=', 'certification_mst.key2')
                      ->select('staff_certification.*', 'certification_mst.value2')
                      ->where('s_id',Auth::user()->s_id)
                      ->paginate(10);

    return view("certification.list",$data);
  }
}
