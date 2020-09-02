<?php

namespace App\Http\Controllers\personalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\certification_mst;
use App\staff_certification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Validator;

class certificationContorller extends Controller
{
  public function __construct()
  {
        $this->middleware('auth');
  }
    //入力フォームの作成
    public function create(){
        //定数データの取得
        $data["categories"]=certification_mst::distinct()->select('key1','value1')->get();
        $data["certifications"]=certification_mst::all();
        $data["users"]=Auth::user();

        return view('personalInformation.certification',$data);
    }

    //データベースへの登録
    public function store(Request $req){


      //入力チェック
      $this->validate($req,staff_certification::$rules);
      //重複チェック　いろいろ試したけど、これしかできなかった＾＾
      $count = staff_certification::where('s_id', $req->s_id)->where('certification_id', $req->certification_id)->get()->count();
      if($count > 0){
        return redirect('personalInformation/certification')
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
      return redirect('/');
    }
}
