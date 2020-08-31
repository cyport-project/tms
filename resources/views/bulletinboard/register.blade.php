@extends('layouts.base')
@section('main')

<div class="col-sm-6">
<div class="form-group">

<form method="post" action="{{action('bulletinboard\createrController@create')}}">
@csrf

<lavel for="title">■タイトル</label>
<input type="text" class="form-control"  name="name" placeholder="(例)PHPについて">
</div></div>

<br>

<div class="col-sm-8">
<div class="form-group">
<lavel for="comment">■本文</label>
<input type="text" textarea class="form-control"  name="message" rows="7"></textarea>
</div></div>

<br>

<button type="submit" class="btn btn-info">投稿</button>
</a>

</form>

<br>
<br>

<p Align="right">
 <a href="/bulletinboard/"><button type="submit" class="btn btn-info">戻る</button></a>
</p>
 
  @endsection
  
