@extends('layouts.base')
@section('tilte','スタッフ経歴登録')
@section('main')
@csrf

<!-- エラー時の表示 -->
@if (count($errors) > 0)
      <ul>
      @foreach($errors->all() as $err)
        <li class ="text-danger">{{$err}} </li>
      @endforeach
      </ul>
@endif
<!-- フォーム -->
<form method="post" action="{{action('exp\registerController@register')}}">
@csrf

<!-- 1行目 -->
 <div class="form-group row">
 	<label for="name" class="col-md-4 col-form-label text-md-right" >氏名</label>
 	  <div class="col-md-6">
 	    <input type="text" name="name" value="{{$name->lname.$name->fname}}" readonly >
      <input type="hidden" value="{{old('s_id',$name->s_id)}}" >
 	  </div>
  </div>

<!-- 2行目 -->
  <div class="form-group row">
    <label for="start_period" class="col-md-4 col-form-label text-md-right">プロジェクト開始</label>
    <div class="col-md-6">
      <input type="date" name="start_period" value="{{old('start_period')}}">
    </div>
  </div>

<!-- 3行目 -->
  <div class="form-group row">
    <label for="end_period" class="col-md-4 col-form-label text-md-right">プロジェクト終了</label>
    <div class="col-md-6">
      <input type="date" name="end_period" value="{{old('end_period')}}">
    </div>
  </div>

<!-- 4行目  -->
  <div class="form-group row">
 	 	<label for="pro_name" class="col-md-4 col-form-label text-md-right">プロジェクト名</label>
 	  <div class="col-md-6">
 	      <input type="text" name="pro_name" value="{{old('pro_name')}}">
 	    </div>
  </div>

<!-- 5行目 -->
  <div class="form-group row">
 	   <label for="industry" class="col-md-4 col-form-label text-md-right" >業種</label>
 	   <div class="col-md-6">
 	       <input type="text" name="industry" value="{{old('industry')}}" />
 	     </div>
  </div>

<!-- 6行目 -->
  <div class="form-group row">
 	    <label for="pro_content" class="col-md-4 col-form-label text-md-right">プロジェクト概要</label>
 	    <div class="col-md-6">
 	      <textarea cols="50"  rows="3" name="pro_content">{{old('pro_content')}}</textarea>
 	    </div>
  </div>

<!-- 7行目 -->
  <div class="form-group row">
   	 	<label for="content" class="col-md-4 col-form-label text-md-right">業務内容</label>
 	    <div class="col-md-6">
 	      <textarea cols="50" rows="3" name="content" >{{old('content')}}</textarea>
 	    </div>
  </div>

<!-- 8行目 -->
  <div class="form-group row">
  	 	<label for="mod_os" class="col-md-4 col-form-label text-md-right">機種・OS</label>
 	    <div class="col-md-6">
 	       <input type="text" name="mod_os" value="{{old('mod_os')}}">
 	     </div>
  </div>

<!-- 9行目 -->
    <div class="form-group row">
   	 	<label for="DB_DC" class="col-md-4 col-form-label text-md-right">使用データベース</label>
 	    <div class="col-md-6">
 	      <input type="text" name="db_dc" value="{{old('db_dc')}}">
 	    </div>
    </div>

<!-- 10行目 -->
      <div class="form-group row">
   	 	  <label for="lang_tool" class="col-md-4 col-form-label text-md-right">言語・ツール</label>
 	         <div class="col-md-6">
 	           <input type="text" name="lang_tool" value="{{old('lang_tool')}}">
           </div>
		  </div>

<!-- 10行目 -->
    <div class="form-group row">
        <label for="lang_tool" class="col-md-4 col-form-label text-md-right">担当フェーズ</label>
        <div class="col-md-7">
			       <input type="checkbox" name="rd_p" id="rd_p"　value="1">要件定義　
             <input type="checkbox" name="bd_p" id="bd_p"　value="1">基本設計　
             <input type="checkbox" name="dd_p" id="dd_p"　value="1">詳細設計　
             <input type="checkbox" name="pg_p" id="pg_p"　value="1">開発・テスト　
             <input type="checkbox" name="el_p" id="el_p"　value="1">評価　
             <input type="checkbox" name="ml_p" id="ml_p"　value="1">保守　
             <input type="checkbox" name="op_p" id="op_p"　value="1">運用　
         </div>
    </div>

<!-- 11行目 -->
    <div class="form-group row">
        <label for="lang_tool" class="col-md-4"></label>
        <div class="col-md-8　text-md-left">
            <input type="button" class="btn btn-info" onclick="history.back()" value="戻る">
			      <input type="submit" class="btn btn-info" value="確定">
        </div>
    </div>
</form>
@endsection
