<?php

namespace App\Http\Controllers\bulletinboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  //登録処理
  public function register()
  {
    return view('bulletinboard.register');
  }
}
