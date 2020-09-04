<?php

namespace App\Http\Controllers\exp;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class expcontroller extends Controller
{
	public function meun() {
	$items = DB::table('people')->get();
	return view ('exp.expmeun',['items' => $items]);
	}
	
	public function edit(Request $request) {	
	$item = DB::table('people')
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
	DB::table('people')
		->where('s_id',$request->s_id)
		->update($param);
		return redirect('expmeun');
	}
	
	public function view(Request $request) {
	$s_id = $request->s_id;
	$items = DB::table('people')->where('s_id','=',$s_id)->get();
	return view ('exp.expview',['items' => $items]);
	}
	
	public function search(Request $request){
	$item = Person::where('name',$request->input)->first();
	$param = ['input' => $request->input, 'item' => $item];
	return view('exp.expmeun',$param);
	}
	
	public function find(Request $request){
	return view('exp.expmeun',['input' => '']);
	}
	
	public function scopeNameEqual($query,$str){
	return $query->where('name',$str);
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
	DB::table('people')
		->insert($param);
		return redirect('expmeun');
	}
	
	public function getData(){
		return $this->s_id . ': '. $this->name . ' ('.$this->mod_os.')';
	}
}
