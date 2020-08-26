
  @extends('layouts.base')
  @section('main')

<p Align="right">
 <a href="/bulletinboard/register"><button type="submit" class="btn btn-info">新規投稿</button></a>&emsp;&emsp;
 <input id="sbox1" id="s" name="s" type="text" placeholder="キーワードを入力" />
 <button type="submit" class="btn btn-info">検索</button></a>
</p>

@foreach($threads as $item)

<div class="col-sm-12">
<div class="card border-info">

 <font size="4">

 <li>{{$item->thread_id}}&emsp;

<b>{{$item->name}}</b><br>

{{$item->message}}<br><br>

<p Align="right">名前&emsp;
 {{$item->created_at}}&emsp;
 <a href="/bulletinboard/delete/{{$item->thread_id}}" class="btn btn-secondary btn-sm">削除</a>&emsp;
</p>
</font>

@break
@endforeach

</div></div>

<br><br>

@foreach($comments as $item)

<div class="col-sm-12">
<div class="card border-info">

 <font size="4">
{{$item->comment_id}}&emsp;
{{$item->body}}

<p Align="right">名前&emsp;
{{$item->created_at}}&emsp;
 <a href="/bulletinboard/delete/{{$item->comment_id}}" class="btn btn-secondary btn-sm">削除</a>&emsp;
</p>
 </font>
</div></div>
@endforeach

<br><br>

<div class="col-sm-8">
<div class="form-group">
<textarea class="form-control" id="textarea1" rows="5" placeholder="コメントを入力"></textarea>
</div></div>

<br>
<a href="/bulletinboard/contents"><button type="submit" class="btn btn-info">返信</button></a>


<p Align="right">
 <a href="/bulletinboard/"><button type="submit" class="btn btn-info">戻る</button></a>
</p>
 
  @endsection
  
