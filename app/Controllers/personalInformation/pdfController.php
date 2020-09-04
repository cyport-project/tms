<?php

namespace App\Http\Controllers\personalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\staff;

class pdfController extends Controller
{
    //
    public function __construct()
    {
          $this->middleware('auth');
    }
    //データベースからデータ取得
    public function list() {

      $data = ['records' => staff:: all() ];

      return view('personalInformation.print', $data);
    }

    public function print(Request $req) {
        //
        if(!isset($req->select)){
          return redirect('personalInformation/print')
                          ->withErrors("選択してください。")
                          ->withInput();
        }else{
          $records=array();
          foreach($req->select as $select){
            $records[]=[
              'zip'=> $req->zip[$select-1],
              'address' => $req->address[$select-1],
              'name' => $req->name[$select-1],
            ];
          }
        }

        $pdf=app('dompdf.wrapper');
        $pdf->LoadView('personalInformation/pdf',compact('records'));
        return $pdf->download();
        //return $pdf->stream();
        //return view('personalInformation/pdf',compact('records'));
    }
}
