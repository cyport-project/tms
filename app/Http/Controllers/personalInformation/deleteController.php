<?php

namespace App\Http\Controllers\personalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    //
    //認証チェック
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function delete(Request $req, $s_id) {
      DB::table('staff')
           ->where('s_id', $s_id)
           ->update([
             'delete_flag'=>'1'
           ]);

      return redirect('personalInformation/list');
    }
}
