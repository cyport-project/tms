@extends('layouts.base')
@section('title','個人経歴情報')
@section('main')
<div class="form-group row">

  <div class="container" style="padding:10px;">
    <row>
      <div class="col-sm-4" align="left">社員ID：@if(isset($name)) $name->s_id @endif </div>
      <div class="col-sm-6" align="left">氏名：@if(isset($name)) $name->lname . $name->fname @endif</div>
      <div class="col-sm-12" align="right">
        <a href="/exp/create/" class="btn-sm btn-info">追加</a>
      </div>
    </row>
  </div>

  <div class="container">
    <row>
    <table class="table table-sm table-bordered" style="table-layout: auto;">
      <font size=1>
      <tr>
        <th> 期間 </th>
        <th> <span class="vertical" >業種</span> </th>
        <th style="width: 400px;"> 業務内容 </th>
        <th> 機種・OS </th>
        <th> 使用DB </th>
        <th> 言語・ツール </th>
        <th> <span class="vertical" >要件</span></th>
        <th> <span class="vertical" >基本</span></th>
        <th> <span class="vertical" >詳細</span></th>
        <th> <span class="vertical" >開発</span></th>
        <th> <span class="vertical" >評価</span></th>
        <th> <span class="vertical" >保守</span></th>
        <th> <span class="vertical" >運用</span></th>
        <th> 編集 </th>
      </tr>
      @foreach ($records as $record)
      <tr>
        <td> {{$record->start_period}}～{{$record->end_period}}</td>
        <td> <span class="vertical" >{{$record->industry}}</span> </td>
        <td> {{$record->content}} </td>
        <td> {{$record->mod_os}} </td>
        <td> {{$record->DB_DC}} </td>
        <td> {{$record->lang_tool}} </td>
        <td> <span class="vertical" >@if($record->rd_p == '1') 〇 @endif　</span></td>
        <td> <span class="vertical" >@if($record->bd_p == '1') 〇 @endif  </span></td>
        <td> <span class="vertical" >@if($record->dd_p == '1') 〇 @endif  </span></td>
        <td> <span class="vertical" >@if($record->pg_p == '1') 〇 @endif  </span></td>
        <td> <span class="vertical" >@if($record->el_p == '1') 〇 @endif  </span></td>
        <td> <span class="vertical" >@if($record->mt_p == '1') 〇 @endif  </span></td>
        <td> <span class="vertical" >@if($record->op_p == '1') 〇 @endif  </span></td>
        <td><a href="/exp/update/{{$record->id}}/edit" class="btn btn-info btn-sm">編集</a></td>
      </tr>
      @endforeach

      </font>
    </table>
  </row>

  <row>
    <!-- page control -->
    {!! $records->render() !!}
  </row>
  </div>
</div>
@endsection
