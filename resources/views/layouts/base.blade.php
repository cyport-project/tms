<!DOCTYPE html>
<html lang="ja">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head>
<meta charset="UTF-8" />
<title>@yield('title')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
<br/>
  <div class="container">
    <div style="background-color:#add8e6;"><div class="jumbotron-fluid"></div>
      <div style="padding:10px; height:10px" Align="right">
        @if(Auth::check())
          <a > ログイン:{{Auth::user()->s_id}}</a>
        @endif
          <a href="{{ route('logout') }}">  ログアウト  </a>
      </div>
      <div style="padding:30px; width:100px">
      	<a href="{{ url('/') }}"><img src="{{ asset('/assets/images/TMS.jpg') }}" alt="ロゴ"></a>
      </div>
  </div>
</div>
<br/>
@if(Auth::check())

<div class="col-sm-12">
<div class="container">
  <nav class="navbar navbar-expand navbar-light bg-info">
    <div class="collapse navbar-collapse" id="navbarNav" >



      <ul class="navbar-nav  mr-auto">

        <li class="nav-item">
          <a class="nav-link active" href="/home">トップ</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">個人情報</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/personalInformation/register">個人情報登録</a>
            <a class="dropdown-item" href="/personalInformation/certification">資格情報登録</a>
            <a class="dropdown-item" href="/personalInformation/list">個人情報一覧</a>
            <a class="dropdown-item" href="/personalInformation/print">宛名印刷</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">経歴情報</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="exp/expreg">経歴情報登録</a>
            <a class="dropdown-item" href="exp/expmeun">経歴情報検索</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="/bulletinboard/">掲示板</a>
        </li>
      </ul>
        <!-- 社員IDの表示 -->
      <ul class="navbar-nav">
        @if(Auth::user()->mode == 9)
        <!-- 管理情報の設定 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">管理情報</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="register">社員ID登録</a>
            <a class="dropdown-item" href="#">パスワード変更</a>
          </div>
        </li>
        @endif
      </ul>
    </div>
</div></div>
@endif

<div class="container">
  <br/>
  @section('main')
    <p>既定のコンテンツです。</p>
  @show
</div>
<div class="container">
  <br />
  <p><center>Copyright(c) 2020,TMS Project. All Right Reserved.</center></p>
</div>
</body>
</html>
