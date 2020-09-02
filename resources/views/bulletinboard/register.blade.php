@extends('layouts.base')
@section('main')

  <form method="post" action="{{action('bulletinboard\createController@create')}}">
    @csrf
    <input type="hidden" name="name" value="{{Auth::user()->s_id}}">
    <div class="col-sm-6">
      <lavel for="title">■タイトル</label>
      <input type="text" class="form-control"  name="title" placeholder="(例)PHPについて">
    </div>
    <br/>
    <div class="col-sm-8">
      <lavel for="comment">■本文</label>
      <input type="text" class="form-control"  name="message" rows="7">
    </div>
    <br/>
    <button type="submit" class="btn btn-info">投稿</button>
  </form>

<br>
<br>

<p Align="right">
 <button type="submit" class="btn btn-info" onclick=history.back() >戻る</button></a>
</p>

  @endsection
