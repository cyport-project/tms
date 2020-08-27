
  @extends('layouts.base')
  @section('main')

<div class="col-sm-6">
<div class="form-group">
<lavel for="title">■タイトル</label>
<input type="title" class="form-control" id="title" placeholder="(例)PHPについて">
</div></div>

<br>

<div class="col-sm-8">
<div class="form-group">
<lavel for="comment">■本文</label>
<textarea class="form-control" id="textarea1" rows="7"></textarea>
</div></div>

<br>
@foreach($threads as $item)
<a href="/bulletinboard/?name={{$item->name}}"">
 <button type="submit" class="btn btn-info">投稿</button>
</a>
@endforeach

<br>
<br>

<p Align="right">
 <a href="/bulletinboard/"><button type="submit" class="btn btn-info">戻る</button></a>
</p>
 
  @endsection
  
