@extends('layouts.base')
@section('title','個人情報登録')
@section('main')
@if (count($errors) > 0)
    <ul>
    @foreach($errors->all() as $err)
      <li class ="text-danger">{{$err}} </li>
    @endforeach
    </ul>
@endif

<form method="post" action="{{action('personalInformation\registerController@confirm')}}">
@csrf
    <div class="form-group row">
      <label for="s_id_h" class="col-md-4 col-form-label text-md-right">社員ID</label>
        @if ($users->mode === '1')
          <div class="col-md-6">
            <input id ="s_id" name ="s_id" type ="text" value ="{{old('s_id',$users->s_id)}}" readonly />
          </div>
        @else
          <div class="col-md-6">
            <input id ="s_id" name ="s_id" type ="text" value ="{{old('s_id')}}" />
          </div>
        @endif
    </div>

    <div class="form-group row">
      <label for="name_j_h" class="col-md-4 col-form-label text-md-right">ふりがな</label>
        <div class="col-md-6">
            <input id ="lname_j" name ="lname_j" type ="text" size ="28" value ="{{ old('lname_j') }}" />
            <input id ="fname_j" name ="fname_j" type ="text" size ="40" value ="{{ old('fname_j') }}" />
        </div>
    </div>

    <div class="form-group row">
      <label for="name_h" class="col-md-4 col-form-label text-md-right">氏名</label>
        <div class="col-md-6">
              <input id ="lname" name ="lname" type ="text" size ="28" value ="{{ old('lname') }}" />
              <input id ="fname" name ="fname" type ="text" size ="40" value ="{{ old('fname_j') }}" />
        </div>
    </div>

    <div class="form-group row">
      <label for="b_date_h" class="col-md-4 col-form-label text-md-right">生年月日</label>
        <div class="col-md-6">
            <input id ="b_date" name ="b_date" type ="date" size ="12" min="1900-04-08" max="2999-04-14" value ="{{ old('b_date') }}" />
        </div>
    </div>

    <div class="form-group row">
      <label for="radio01" class="col-md-4 col-form-label text-md-right">性別</label>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" id="inlineRadio01" name="sex" value="1" checked="checked">
             <label class="form-check-label" for="inlineRadio01">男性</label>
          </div>
          <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" id="inlineRadio02"  name="sex" value="2" >
             <label class="form-check-label" for="inlineRadio02">女性</label>
          </div>
        </div>
      </div>

    <div class="form-group row">
      <label for="tell_num_h" class="col-md-4 col-form-label text-md-right">携帯電話番号</label>
        <div class="col-md-6">
            <input id ="tell_num" name ="tell_num" type ="text" size ="12" value ="{{ old('tell_num') }}" />
        </div>
    </div>

    <div class="form-group row">
      <label for="emergency_contact_h" class="col-md-4 col-form-label text-md-right">緊急連絡先</label>
        <div class="col-md-6">
            <input id ="emergency_contact" name ="emergency_contact" type ="text" size ="12" value ="{{ old('emergency_contact') }}" />
        </div>
    </div>

    <div class="form-group row">
      <label for="phone_h" class="col-md-4 col-form-label text-md-right">自宅電話番号</label>
        <div class="col-md-6">
          <input id ="phone" name ="phone" type ="text" size ="12" value ="{{ old('phone') }}" />
        </div>
    </div>

    <div class="form-group row">
      <label for="mail_ad_h" class="col-md-4 col-form-label text-md-right">メールアドレス</label>
      <div class="col-md-6">
        <input id ="mail_ad" name ="mail_ad" type ="text" size ="30" value ="{{ old('mail_ad') }}" />
      </div>
    </div>

    <div class="form-group row">
      <label for="educational_h" class="col-md-4 col-form-label text-md-right">学歴</label>
      <div class="col-md-6">
        <select name="educational">
            @foreach ($educationals as $educational)
              <option value = {{$educational->value}} > {{$educational->name}} </option>
            @endforeach
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="zip_h" class="col-md-4 col-form-label text-md-right">郵便番号</label>
      <div class="col-md-6">
          <input id ="zip" name ="zip" type ="text" size ="8" value ="{{ old('zip') }}" />
      </div>
    </div>

    <div class="form-group row">
      <label for="address_h" class="col-md-4 col-form-label text-md-right">住所</label>
      <div class="col-md-6">
          <input id ="address" name ="address" type ="text" size ="100" value ="{{ old('address') }}" />
      </div>
    </div>

    <div class="form-group row">
      <label for="address2_h" class="col-md-4 col-form-label text-md-right">予備住所</label>
      <div class="col-md-6">
            <input id ="address_2" name ="address_2" type ="text" size ="100" value ="{{ old('address_2') }}" />
      </div>
    </div>

    <div class="form-group row">
      <label for="station_h" class="col-md-4 col-form-label text-md-right">最寄り駅</label>
      <div class="col-md-6">
            <input id ="station" name ="station" type ="text" size ="70" value ="{{ old('station') }}" />
      </div>
    </div>

    <div class="form-group row">
      <label for="department_h" class="col-md-4 col-form-label text-md-right">部署</label>
      <div class="col-md-6">
        <select name="department">
          @foreach ($departments as $department)
            <option value = {{$department->value}} > {{$department->name}} </option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="expense_h" class="col-md-4 col-form-label text-md-right">必要経費</label>
      <div class="col-md-6">
        <input id ="expense" name ="expense" type ="text" size ="8" value ="{{ old('expense') }}" />
      </div>
    </div>

    <div class="form-group row">
      <label for="employment_category_h" class="col-md-4 col-form-label text-md-right">就業区分</label>
      <div class="col-md-6">
        <select name="employment_category">
            @foreach ($employment_categorys as $employment_category)
              <option value = {{$employment_category->value}} > {{$employment_category->name}} </option>
            @endforeach
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="submit_h" class="col-md-4 col-form-label text-md-right"></label>
      <div class="col-md-6">
        <button type="submit" class="btn btn-info"　onclick=history.back() >送信</button>
      </div>
    </div>
  </form>
@endsection
