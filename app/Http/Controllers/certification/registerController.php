<?php

namespace App\Http\Controllers\certification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\certification_mst;
use App\staff_certification;
use Illuminate\Support\Facades\DB;
use App\staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Validator;

class registerController extends Controller
{
  public function __construct()
  {
        $this->middleware('auth');
  }
    //一覧表の作成


    //入力フォームの作成
    public function create(){
        //定数データの取得
        $data["categories"]=certification_mst::distinct()->select('key1','value1')->get();
        $data["certifications"]=certification_mst::all();
        $data["users"]=Auth::user();

        return view('certification.create',$data);
    }

    //データベースへの登録
    public function store(Request $req){


      //入力チェック
      $this->validate($req,staff_certification::$rules);

      //重複チェック　いろいろ試したけど、これしかできなかった＾＾
      $count = staff_certification::where('s_id', $req->s_id)->where('certification_id', $req->certification_id)->get()->count();
      if($count > 0){
        return redirect('certification\create')
                        ->withErrors("既に登録済です。")
                        ->withInput();
      }

      $data=new staff_certification();
      $data->s_id = $req->s_id;
      $data->certification_id = $req->certification_id;
      $data->notices=$req->notices;
      $data->certification_date=$req->certification_date;
      $data->delete_flag='0';
      $data->save();

      //経験情報を読み込む
      $data['name']=staff::where('s_id', Auth::user()->s_id) -> first();
      $data['records'] = DB::table('staff_certification')
                          ->join('certification_mst', 'certification_id', '=', 'certification_mst.key2')
                          ->select('staff_certification.*', 'certification_mst.value2')
                          ->paginate(10);

      return view('certification.list',$data);
    }
}
