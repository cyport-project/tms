<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\information;

class dashboardController extends Controller
{
  public function __construct()
  {
      \Log::info('dashboard Start');
      $this->middleware('auth');
  }
    //お知らせを読み込む
    //データベースからデータ取得
    public function list() {
    	$data = ['records' => information:: all() ];
		  return view('dashboard.list', $data);
    }
}
