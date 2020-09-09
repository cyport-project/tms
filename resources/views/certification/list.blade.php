@extends('layouts.base')
@section('title','個人経歴情報')
@section('main')
@csrf
<div class="form-group row">

  <div class="container" style="padding:10px;">
    <row>
      <div class="col-sm-4" align="left">社員ID：@if(isset($name)) {{$name->s_id}} @endif </div>
      <div class="col-sm-6" align="left">氏名：@if(isset($name)) {{$name->lname . $name->fname}} @endif</div>
      <div class="col-sm-12" align="right">
        <a href="/certification/create/" class="btn-sm btn-info">追加</a>
      </div>
    </row>
  </div>

  <div class="container">
    <row>
    <table class="table table-sm table-bordered" style="table-layout: auto;">
      <tr>
        <th> 取得年月日 </th>
        <th> 資格名 </th>
        <th> 編集 </th>
      </tr>
      @foreach ($records as $record)
      <tr>
        <td> {{$record->certification_date}}</td>
        <td> {{$record->value2}}</span> </td>
        <td width="60px" ><a href="/certification/update/{{$record->id}}/edit" class="btn btn-info btn-sm">編集</a></td>
      </tr>
      @endforeach
    </table>
  </row>

  <row>
    <!-- page control -->
    {!! $records->render() !!}
  </row>
  </div>
</div>
@endsection
