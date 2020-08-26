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
  @media screen{
    table{
      mergin:21.2mm 18.6mm
    }
    tr{
        height:50.8mm
      }
    td{
        width:86.4mm
      }
  }
  </style>
</head>
<body>
@csrf
@if(isset($records))
<div class=container>
  <table class="noborder" >
    <tbody>
    @foreach($records as $record)
      @if(($loop->iteration %2 ) == 1  )
      <!-- 1番目の出力 -->
      <tr class="noborder" >
      <td class="noborder" >
        {{$record['zip']}}
        <br/>
        {{$record['address']}}
        <br/>
        {{$record['name']}}
        <br/>
      </td>
      <br/>
      @else
    <!-- 2番目の出力 -->
      <td class="noborder" width="86.4mm" >
          {{$record['zip']}}
          <br/>
          {{$record['address']}}
          <br/>
          {{$record['name']}}
        <br/>
      </td>
    </tr>
    @endif
  @endforeach
  </tbody>
</table>
</div>
@endif
</body>
</html>
