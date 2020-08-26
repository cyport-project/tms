
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
<a href="/bulletinboard/contents/?thread_id={{$item->thread_id}}">{{$item->name}}</a>

<p Align="right">名前&emsp;
 {{$item->created_at}}&emsp;<br>
  <span class="badge badge-success">コメント件</span>&emsp;
</p>
</font>

 @endforeach
</div></div>

<br>

<p Align="right">
 <a href="/home"><button type="submit" class="btn btn-info">戻る</button></a>
</p>
 
  @endsection
  
