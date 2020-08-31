<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class bulletinboardController extends Controller
{
    //���X�g
    public function list()
    {
        $data['threads']=  thread:: all() ;
        $data['comments']= comment:: all() ;

        return view('bulletinboard.list',$data);
    }

    //���W�X�^�[
    public function register(Request $request)
    {
        $data['threads']=  thread:: all() ;
        $data['comments']= comment:: all() ;

        return view('bulletinboard.register');
    }

    //�R���e���c
    public function contents(Request $request)
    {
        $data['threads']=  thread:: all() ;
        $data['comments']= comment:: all() ;
        $thread_id = $request->thread_id;
        $data['threads'] = DB::table('thread')->where('thread_id','=',$thread_id)->get();
        $comment_id = $request->comment_id;
        $data['comments'] = DB::table('comment')->where('thread_id','=',$thread_id)->get();

        return view('bulletinboard.contents',$data);
    }

    //���R�[�h�ǉ�
    public function create(Request $request)
    {
        $param = new thread();
        \Log::info($request);
        $param -> name = $request->name;
        $param -> message = $request->message;
        $param -> delete_flag = 0;
        $param -> read_id = $request->created_at;

         DB::table('thread')->insert($param);

        return redirect('bulletinboard');
    }

    //�X���b�h�폜
    public function delete(Request $request)
    {
        $item = DB::table('thread')
             ->where('thread_id',$request->thread_id)->first();
        return view ('bulletinboard/list',['form' => $item]);
    }

}
    
