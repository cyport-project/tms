@extends('layouts.base')
@section('tilte','スタッフ経歴変更')
@section('main')
<!-- エラー時の表示 -->
@if (count($errors) > 0)
      <ul>
      @foreach($errors->all() as $err)
        <li class ="text-danger">{{$err}} </li>
      @endforeach
      </ul>
@endif
<!-- フォーム -->
<form method="post" action="{{action('exp\updateController@register')}}">
@csrf
@method('patch')

<input type="hidden" name="id" value="{{old('id',$record->id)}}">
<!-- 1行目 -->
  <div class="form-group row">
    <label for="start_period" class="col-md-4 col-form-label text-md-right">プロジェクト開始</label>
    <div class="col-md-6">
      <input type="date" name="start_period" value="{{old('start_period',$record->start_period)}}">
    </div>
  </div>

<!-- 2行目 -->
  <div class="form-group row">
    <label for="end_period" class="col-md-4 col-form-label text-md-right">プロジェクト終了</label>
    <div class="col-md-6">
      <input type="date" name="end_period" value="{{old('end_period',$record->end_period)}}">
    </div>
  </div>

<!-- 3行目  -->
  <div class="form-group row">
 	 	<label for="pro_name" class="col-md-4 col-form-label text-md-right">プロジェクト名</label>
 	  <div class="col-md-6">
 	      <input type="text" name="pro_name" value="{{old('pro_name',$record->pro_name)}}">
 	    </div>
  </div>

<!-- 4行目 -->
  <div class="form-group row">
 	   <label for="industry" class="col-md-4 col-form-label text-md-right" >業種</label>
 	   <div class="col-md-6">
 	       <input type="text" name="industry" value="{{old('industry',$record->industry)}}" />
 	     </div>
  </div>

<!-- 5行目 -->
  <div class="form-group row">
 	    <label for="pro_content" class="col-md-4 col-form-label text-md-right">プロジェクト概要</label>
 	    <div class="col-md-6">
 	      <textarea cols="50" name="pro_content" >{{old('pro_content',$record->pro_content)}}</textarea>
 	    </div>
  </div>

<!-- 6行目 -->
  <div class="form-group row">
   	 	<label for="content" class="col-md-4 col-form-label text-md-right">業務内容</label>
 	    <div class="col-md-6">
 	      <textarea cols="50" name="content">{{old('content',$record->content)}}</textarea>
 	    </div>
  </div>

<!-- 7行目 -->
  <div class="form-group row">
  	 	<label for="mod_os" class="col-md-4 col-form-label text-md-right">機種・OS</label>
 	    <div class="col-md-6">
 	       <input type="text" name="mod_os" value="{{old('mod_os',$record->mod_os)}}">
 	     </div>
  </div>

<!-- 8行目 -->
    <div class="form-group row">
   	 	<label for="DB_DC" class="col-md-4 col-form-label text-md-right">使用データベース</label>
 	    <div class="col-md-6">
 	      <input type="text" name="db_dc" value="{{old('db_dc',$record->db_dc)}}">
 	    </div>
    </div>

<!-- 9行目 -->
      <div class="form-group row">
   	 	  <label for="lang_tool" class="col-md-4 col-form-label text-md-right">言語・ツール</label>
 	         <div class="col-md-6">
 	           <input type="text" name="lang_tool" value="{{old('lang_tool',$record->lang_tool)}}">
           </div>
		  </div>

<!-- 10行目 -->
    <div class="form-group row">
        <label for="lang_tool" class="col-md-4 col-form-label text-md-right">工程</label>
        <div class="col-md-7">
			       <input type="checkbox" name="rd_p" id="rd_p" value="1" @if($record->rd_p == 1) checked="checked" @endif>要件定義　
             <input type="checkbox" name="bd_p" id="bd_p" value="1" @if($record->bd_p == 1) checked="checked" @endif>基本設計　
             <input type="checkbox" name="dd_p" id="dd_p" value="1" @if($record->dd_p == 1) checked="checked" @endif>詳細設計　
             <input type="checkbox" name="pg_p" id="pg_p" value="1" @if($record->pg_p == 1) checked="checked" @endif>開発・テスト　
             <input type="checkbox" name="el_p" id="el_p" value="1" @if($record->el_p == 1) checked="checked" @endif>評価　
             <input type="checkbox" name="ml_p" id="ml_p" value="1" @if($record->ml_p == 1) checked="checked" @endif>保守　
             <input type="checkbox" name="op_p" id="op_p" value="1" @if($record->op_p == 1) checked="checked" @endif>運用　
         </div>
    </div>

<!-- 11行目 -->
    <div class="form-group row">
        <label for="lang_tool" class="col-md-4"></label>
        <div class="col-md-8　text-md-left">
			       <input type="submit" class="btn-info" value="変更">
        </div>
    </div>
</form>
@endsection
