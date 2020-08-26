@extends('layouts.base')
@section('title','個人情報登録')
@section('main')

<form method="post" action="{{action('personalInformation\registerController@store')}}">
  @csrf
    <div class="form-group row">
      <label for="s_id_h" class="col-md-4 col-form-label text-md-right">社員ID</label>
      <div class="col-md-6 text-md-left"> {{$staff->s_id}} </div>

      <label for="name_j_h" class="col-md-4 col-form-label text-md-right">ふりがな</label>
      <div class="col-md-6 text-md-left"> {{$staff->lname_j}} {{$staff->fname_j}} </div>

      <label for="name_h" class="col-md-4 col-form-label text-md-right">氏名</label>
      <div class="col-md-6 text-md-left">{{$staff->lname}} {{$staff->fname}} </div>

      <label for="b_date_h" class="col-md-4 col-form-label text-md-right">生年月日</label>
      <div class="col-md-6 text-md-left">{{$staff->b_date}} </div>

      <label for="sex_h" class="col-md-4 col-form-label text-md-right">性別</label>
      <div class="col-md-6 text-md-left">{{$sex_j}}</div>

      <label for="tell_num_h" class="col-md-4 col-form-label text-md-right">携帯電話番号</label>
      <div class="col-md-6 text-md-left">{{$staff->tell_num}}</div>

      <label for="emergency_contact_h" class="col-md-4 col-form-label text-md-right">緊急連絡先</label>
      <div class="col-md-6 text-md-left">{{$staff->emergency_contact}}</div>

      <label for="phone_h" class="col-md-4 col-form-label text-md-right">自宅電話番号</label>
      <div class="col-md-6 text-md-left">{{$staff->phone}}</div>

      <label for="mail_ad_h" class="col-md-4 col-form-label text-md-right">メールアドレス</label>
      <div class="col-md-6 text-md-left">{{$staff->mail_ad}}</div>

      <label for="educational_h" class="col-md-4 col-form-label text-md-right">学歴</label>
      <div class="col-md-6 text-md-left">{{$educational_j->name}}</div>

      <label for="zip_h" class="col-md-4 col-form-label text-md-right">郵便番号</label>
      <div class="col-md-6 text-md-left">{{$staff->zip}}</div>

      <label for="address_h" class="col-md-4 col-form-label text-md-right">住所</label>
      <div class="col-md-6 text-md-left">{{$staff->address}}</div>

      <label for="address_2_h" class="col-md-4 col-form-label text-md-right">予備住所</label>
      <div class="col-md-6 text-md-left">{{$staff->address_2}}</div>

      <label for="station_h" class="col-md-4 col-form-label text-md-right">最寄り駅</label>
      <div class="col-md-6 text-md-left">{{$staff->station}}</div>

      <label for="department_h" class="col-md-4 col-form-label text-md-right">部署</label>
      <div class="col-md-6 text-md-left">{{$department_j->name}}</div>

      <label for="expense_h" class="col-md-4 col-form-label text-md-right">必要経費</label>
      <div class="col-md-6 text-md-left">{{$staff->expense}}</div>

      <label for="employment_category_h" class="col-md-4 col-form-label text-md-right">就業区分</label>
      <div class="col-md-6 text-md-left">{{$employment_category_j->name}}</div>

      <br/>
      <label for="employment_category_h" class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-6 text-md-left">
            <button type="button" class="btn btn-info" onclick="history.back()">戻る</button>
            <button type ="submit" class="btn btn-info"> 登録</button>
        </div>

    </div>
  </form>
@endsection
