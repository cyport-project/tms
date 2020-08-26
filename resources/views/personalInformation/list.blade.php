@extends('layouts.base')
@section('title','個人情報一覧')
@section('main')
  <div class="form-group row">
    <table class="table table-bordered">
      <tr>
        <th scope="col"> 社員ID </th>
        <th> 氏名 </th>
        <th> 生年月日 </th>
        <th> 郵便番号 </th>
        <th> 住所 </th>
        <th> 電話番号 </th>
        <th> 緊急連絡先 </th>
        <th> 詳細 </th>
        <th> 削除 </th>
      @foreach ($records as $record)
      <tr>
        <td> {{$record->s_id}} </td>
        <td> {{$record->lname . $record->fname}} </td>
        <td> {{$record->b_date}}</td>
        <td> {{$record->zip}}</td>
        <td> {{$record->address}}</td>
        <td> {{$record->tell_num}}</td>
        <td> {{$record->emergency_contact}} </td>
        <td><a href="/personalInformation/update/{{$record->s_id}}/edit" class="btn btn-info btn-sm">編集</a></td>
        <td><a href="/personalInformation/delete/{{$record->s_id}}" class="btn btn-info btn-sm">削除</a></td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection
