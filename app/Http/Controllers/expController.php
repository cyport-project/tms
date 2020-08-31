<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class expcontroller extends Controller
{
	public function meun() {
	$items = DB::table('staff_experience')->get();
	return view ('exp.expmeun',['items' => $items]);
	}
	
	public function edit(Request $request) {
	$item = DB::table('staff_experience')
	->where('s_id',$request->s_id)->first();
	return view ('exp.expedit',['form' => $item]);
	}
	
	public function post(Request $request) {
	$param = [
	's_id' => $request->s_id,
	'name' => $request->name,
	'industry' => $request->industry,
	'phase' => $request->phase,
	'pro_name' => $request->pro_name,
	'pro_content' => $request->pro_content,
	'notices' => $request->notices,
	'start_period' => $request->start_period,
	'end_period' => $request->end_period,
	'content' => $request->content,
	'result' => $request->result,
	'mod_os' => $request->mod_os,
	'DB_DC' => $request->DB_DC,
	'lang_tool' => $request->lang_tool,
	];
	DB::table('staff_experience')
		->where('s_id',$request->s_id)
		->update($param);
		return redirect('expmeun');
	}
	
	public function view(Request $request) {
	$s_id = $request->s_id;
	$items = DB::table('staff_experience')->where('s_id','=',$s_id)->get();
	return view ('exp.expview',['items' => $items]);
	}
	
	public function reg(Request $request) {	
	return view ('exp.expreg');
	}
	
	public function regpost(Request $request) {
	$param = [
	's_id' => $request->s_id,
	'name' => $request->name,
	'industry' => $request->industry,
	'phase' => $request->phase,
	'pro_name' => $request->pro_name,
	'pro_content' => $request->pro_content,
	'notices' => $request->notices,
	'start_period' => $request->start_period,
	'end_period' => $request->end_period,
	'content' => $request->content,
	'result' => $request->result,
	'mod_os' => $request->mod_os,
	'DB_DC' => $request->DB_DC,
	'lang_tool' => $request->lang_tool,
	];
	DB::table('staff_experience')
		->insert($param);
		return redirect('expmeun');
	}
}
