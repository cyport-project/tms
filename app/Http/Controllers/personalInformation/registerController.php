<?php

namespace App\Http\Controllers\personalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff;
use App\constant_mst;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    // 入力 フォーム の 生成
    public function create() {
      \Log::info('入力画面Start');
      //定数データの取得
      $data["educationals"]=constant_mst::where('constant_id', '01002')-> get();
      $data["departments"]=constant_mst::where('constant_id', '01001')-> get();
      $data["employment_categorys"]=constant_mst::where('constant_id', '01003')-> get();
      $data["users"]=Auth::user();
      \Log::info('入力画面End');
      return view('personalInformation.register',$data);
    }

    //確認画面を表示
    public function confirm(Request $req) {
      \Log::info('確認画面Start');
      //入力チェック
      $this->validate($req,staff::$rules);

      //リクエストデータをそのまま確認画面へ
      $staff = new staff($req->all());

      //セッションに保存
      $req->session()->put('staff', $staff);

      //出力用に編集する。
      $data["staff"] = $staff;
      if($staff->sex == 1){
        $data["sex_j"] = "男性";
      }else{
        $data["sex_j"] = "女性";
      };
      $data["educational_j"]=constant_mst::where('constant_id', '01002')->where('value', $staff->educational)-> first();
      $data["department_j"]=constant_mst::where('constant_id', '01001')->where('value', $staff->department)-> first();
      $data["employment_category_j"]=constant_mst::where('constant_id', '01003')->where('value', $staff->employment_category)-> first();

      \Log::info('確認画面End');
      return view('personalInformation.confirm',$data);
    }

    // 確認画面 からの 入力 値 を データベース に 登録
    public function store( Request $req) {
      // モデル オブジェクト に データ を 詰め替え＆ 保存
      $b = new staff();

      $b=$req->session()->get('staff');
      $b->s_id=Auth::user()->s_id;
      $b->delete_flag= '0';
      $b->save();

      return redirect('/');
    }
}
