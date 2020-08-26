@extends('layouts.base')
@section('title','宛名印刷')
@section('main')
@if (count($errors) > 0)
    <ul>
    @foreach($errors->all() as $err)
      <li class ="text-danger">{{$err}} </li>
    @endforeach
    </ul>
@endif
<form method="post" action="{{action('personalInformation\pdfController@print')}}">
  @csrf
  <div class="form-group row">
    <table class="table table-bordered">
      <tr>
        <th> 選択 </th>
        <th> 氏名 </th>
        <th> 郵便番号 </th>
        <th> 住所 </th>
        <th> 電話番号 </th>
        <th> 緊急連絡先 </th>
      <tr>
      @foreach($records as $record)
      <tr>
        <td>  <input type="checkbox" name="select[]" value="{{$loop->iteration}}" ></td>
        <td>  <input type="hidden" name="name[]" value={{$record->lname . $record->fname}}>{{$record->lname . $record->fname}}</td>
        <td>  <input type="hidden" name="zip[]" value={{$record->zip}}>{{$record->zip}}</td>
        <td>  <input type="hidden" name="address[]" value={{$record->address}}>{{$record->address}}</td>
        <td> {{$record->tell_num}}</td>
        <td> {{$record->emergency_contact}} </td>
      </tr>
      @endforeach
    </table>
  </div>
  <div right>
    <button type="submit" class="btn btn-info">印刷</button>
  </div>
</form>
@endsection
