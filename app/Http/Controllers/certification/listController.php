<?php

namespace App\Http\Controllers\certification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff_certification;
use App\staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class listController extends Controller
{
  public function list(){
    //経験情報を読み込む
    $data['name']=staff::where('s_id', Auth::user()->s_id) -> first();
    $data['records'] = DB::table('staff_certification')
                        ->join('certification_mst', 'certification_id', '=', 'certification_mst.key2')
                        ->select('staff_certification.*', 'certification_mst.value2')
                        ->where('s_id',Auth::user()->s_id)
                        ->paginate(10);
    \Log::info($data);
    //ビューの呼びだし
    return view('certification.list',$data);
  }
}
