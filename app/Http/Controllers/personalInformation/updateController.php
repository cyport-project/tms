<?php

namespace App\Http\Controllers\personalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff;
use App\constant_mst;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
  //認証チェック
  public function __construct()
  {
    $this->middleware('auth');
  }
  //変更画面の表示
  public function edit($s_id) {
    \Log::info($s_id);
    $data["b"]=staff::where('s_id', $s_id)-> first();
    $data["educationals"]=constant_mst::where('constant_id', '01002')-> get();
    $data["departments"]=constant_mst::where('constant_id', '01001')-> get();
    $data["employment_categorys"]=constant_mst::where('constant_id', '01003')-> get();
    return view('personalInformation.update', $data);
   }

   public function update(Request $req, $s_id) {
     //入力チェック
     $this->validate($req,staff::$rules2);
     // 入力 値 で モデル を 更新＆ 保存
     //$b->fill($req->except('_token', '_method'))-> update();
     DB::table('staff')
            ->where('s_id', $s_id)
            ->update([
              's_id'=>$req->s_id,
              'lname'=>$req->lname,
              'lname_j'=>$req->lname_j,
              'fname'=>$req->fname,
              'fname_j'=>$req->fname_j,
              'b_date'=>$req->b_date,
              'sex'=>$req->sex,
              'tell_num'=>$req->tell_num,
              'emergency_contact'=>$req->emergency_contact,
              'mail_ad'=>$req->mail_ad,
              'educational'=>$req->educational,
              'address'=>$req->address,
              'address_2'=>$req->address_2,
              'zip'=>$req->zip,
              'phone'=>$req->phone,
              'station'=>$req->station,
              'department'=>$req->department,
              'expense'=>$req->expense,
              'employment_category'=>$req->employment_category,
              'delete_flag'=>'0'
            ]);

     return redirect('personalInformation/list');
   }
}
