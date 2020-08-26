<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title> TMS </title>
<link rel="stylesheet"
<href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
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

<a href="/bulletinboard/">
 <button type="submit" class="btn btn-info">投稿</button>
</a>

<br>
<br>

<p Align="right">
 <a href="/bulletinboard/"><button type="submit" class="btn btn-info">戻る</button></a>
</p>
 
  @endsection
  
</body>
</html>
