<?php

namespace App\Http\Controllers\bulletinboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class createController extends Controller
{
    //���R�[�h�ǉ�
    public function create(Request $request)
    {
        \Log::info('���e���Start');
        $param = new thread();
        \Log::info($request);
        $param -> name = $request->name;
        $param -> message = $request->message;
        $param -> delete_flag = 0;
      
         DB::table('thread')->insert($param);

        return redirect('bulletinboard');
    }

}
    
