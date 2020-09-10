@extends('layouts.base')
@section('tilte','スタッフ経歴変更')
@section('main')
@csrf
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="/js/certification.js"></script>
<!-- エラー時の表示 -->
@if (count($errors) > 0)
      <ul>
      @foreach($errors->all() as $err)
        <li class ="text-danger">{{$err}} </li>
      @endforeach
      </ul>
@endif
<!-- フォーム -->
<form method="post" action="{{action('certification\updateController@register')}}">
@csrf
@method('patch')
  <div class="form-group row">
    <label for="s_id" class="col-md-4 col-form-label text-md-right">社員ID</label>
    <div class="col-md-6">
        <input id="s_id" type="text" name="s_id" value ="{{old('s_id',$record->s_id)}}" readonly />
        <input id="id" type="hidden" name="id" value ="{{old('id',$record->id)}}"/>
    </div>
  </div>

  <div class="form-group row">
    <label for="s_id" class="col-md-4 col-form-label text-md-right">取得日付</label>
    <div class="col-md-6">
        <input id ="certification_date" name ="certification_date" type ="date" size ="12" min="1900-04-08" max="2999-04-14" value ="{{ old('certification_date',$record->certification_date) }}"/>
    </div>
  </div>

  <div class="form-group row">
    <label for="s_id" class="col-md-4 col-form-label text-md-right">資格</label>
    <div class="col-md-6">
      <select class="parent" name="category">
        <option value="" selected="selected">カテゴリーを選択</option>
        @foreach ($categories as $category)
          <option value={{$category->key1}}> {{$category->value1}} </option>
        @endforeach
      </select>

      <select class="children" id="children" name="certification_id" disabled>
        <option value="" selected="selected">資格を選択</option>
        @foreach($certifications as $certification)
          <option value={{$certification->key2}} data-val={{$certification->key1}} > {{$certification->value2}} </option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="notice" class="col-md-4 col-form-label text-md-right">特記事項</label>
    <div class="col-md-6">
        <input id ="notices" name ="notices" type ="text" size ="50" value ="{{ old('notices') }}" />
    </div>
  </div>
  <div class="form-group row">
        <label for="notice" class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-6　align-self-center">　
          <input type="button"  class="btn btn-info" onclick="history.back()" value="戻る">
          <input type ="submit" class="btn btn-info" value="更新">
        </div>
    </div>
  </div>
</form>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="/js/certification.js"></script>
@endsection
