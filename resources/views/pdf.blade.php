<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>pdf</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <style>
  @font-face{
    font-family: ipag;
    font-style: normal;
    font-weight: normal;
    src:url('{{ storage_path('fonts/ipag.ttf')}}');
  }
  font-face{
    font-family: ipag;
    font-style: bold;
    font-weight: bold;
    src:url('{{ storage_path('fonts/ipag.ttf')}}');
  }
  body {
    font-family: ipag;
  }
  </style>
</head>
<body>
<div class=container>

    <!-- 1番目の出力 -->
<!--
    <div class="col-4 text-md-left">
     -->
     <table class="table" >
       <tbody>
       <tr>
         <td width="200">
      〒444-0001
      <br/>
      名古屋市中区
     <br/>
      テスト
    </td>
    <td width="200">
          〒444-0002
          <br/>
          名古屋市中区
          <br/>
          テスト
      </td>
    </tr>
   </tbody>
  </table>
</body>
</html>
