  @extends('layouts.base')
  @section('title','個人情報変更')
  @section('main')
  @if (count($errors) > 0)
    <ul>
    @foreach($errors->all() as $err)
      <li class ="text-danger">{{$err}} </li>
    @endforeach
    </ul>
  @endif

  <form method="post" action="/personalInformation/update/{{$b->s_id}}">
  @csrf
  @method('PATCH')
    <div class="form-group row">
      <label for="s_id_h" class="col-md-4 col-form-label text-md-right">社員ID</label>
          <input id ="s_id" name ="s_id" type ="text" size ="3" value ="{{old('s_id',$b->s_id)}}" readonly />
    </div>

    <div class="form-group row">
      <label for="name_j_h" class="col-md-4 col-form-label text-md-right">ふりがな</label>
        <input id ="lname_j" name ="lname_j" type ="text" size ="28" value ="{{ old('lname_j',$b->lname_j) }}" />
        <input id ="fname_j" name ="fname_j" type ="text" size ="40" value ="{{ old('fname_j',$b->fname_j) }}" />
    </div>

    <div class="form-group row">
      <label for="name_h" class="col-md-4 col-form-label text-md-right">氏名</label>
          <input id ="lname" name ="lname" type ="text" size ="28" value ="{{ old('lname',$b->lname) }}" />
          <input id ="fname" name ="fname" type ="text" size ="40" value ="{{ old('fname',$b->fname) }}" />

    </div>

    <div class="form-group row">
      <label for="b_date_h" class="col-md-4 col-form-label text-md-right">生年月日</label>
          <input id ="b_date" name ="b_date" type ="date" size ="12" min="1900-04-08" max="2999-04-14" value ="{{ old('b_date',$b->b_date) }}" />

    </div>

    <div class="form-group row">
      <label for="radio01" class="col-md-4 col-form-label text-md-right">性別</label>
         <div class="col-md-6">
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" id="inlineRadio01" name="sex" value="1" @if ($b->sex == 1) checked @endif>
               <label class="form-check-label" for="inlineRadio01">男性</label>
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" id="inlineRadio02"  name="sex" value="2" @if ($b->sex == 2) checked @endif>
               <label class="form-check-label" for="inlineRadio02">女性</label>
            </div>
         </div>
      </div>

      <div class="form-group row">
        <label for="tell_num_h" class="col-md-4 col-form-label text-md-right">携帯電話番号</label>
           <input id ="tell_num" name ="tell_num" type ="text" size ="12" value ="{{ old('tell_num',$b->tell_num) }}" />
      </div>

      <div class="form-group row">
        <label for="emergency_contact_h" class="col-md-4 col-form-label text-md-right">緊急連絡先</label>
           <input id ="emergency_contact" name ="emergency_contact" type ="text" size ="12" value ="{{ old('emergency_contact',$b->emergency_contact) }}" />
      </div>

      <div class="form-group row">
        <label for="phone_h" class="col-md-4 col-form-label text-md-right">自宅電話番号</label>
            <input id ="phone" name ="phone" type ="text" size ="12" value ="{{ old('phone',$b->phone) }}" />
      </div>

      <div class="form-group row">
        <label for="mail_ad_h" class="col-md-4 col-form-label text-md-right">メールアドレス</label>
            <input id ="mail_ad" name ="mail_ad" type ="text" size ="30" value ="{{ old('mail_ad',$b->mail_ad) }}" />
      </div>

      <div class="form-group row">
        <label for="educational_h" class="col-md-4 col-form-label text-md-right">学歴</label>
            <select name="educational">
                @foreach ($educationals as $educational)
                  <option value = {{$educational->value}} @if($educational->value == $b->educational) selected @endif> {{$educational->name}} </option>
                @endforeach
            </select>
        </div>

      <div class="form-group row">
        <label for="zip_h" class="col-md-4 col-form-label text-md-right">郵便番号</label>
          <input id ="zip" name ="zip" type ="text" size ="8" value ="{{ old('zip',$b->zip) }}" />
      </div>

      <div class="form-group row">
        <label for="address_h" class="col-md-4 col-form-label text-md-right">住所</label>
            <input id ="address" name ="address" type ="text" size ="100" value ="{{ old('address',$b->address) }}" />
      </div>

      <div class="form-group row">
        <label for="address2_h" class="col-md-4 col-form-label text-md-right">予備住所</label>
            <input id ="address_2" name ="address_2" type ="text" size ="100" value ="{{ old('address_2',$b->address_2) }}" />
      </div>

      <div class="form-group row">
        <label for="station_h" class="col-md-4 col-form-label text-md-right">最寄り駅</label>
            <input id ="station" name ="station" type ="text" size ="70" value ="{{ old('station',$b->station) }}" />
      </div>

      <div class="form-group row">
        <label for="department_h" class="col-md-4 col-form-label text-md-right">部署</label>
            <select name="department">
                @foreach ($departments as $department)
                    <option value = {{$department->value}} @if($department->value == $b->department) selected @endif> {{$department->name}} </option>
                @endforeach
            </select>
      </div>

      <div class="form-group row">
        <label for="expense_h" class="col-md-4 col-form-label text-md-right">必要経費</label>
            <input id ="expense" name ="expense" type ="text" size ="8" value ="{{ old('expense',$b->expense) }}" />
      </div>

      <div class="form-group row">
        <label for="employment_category_h" class="col-md-4 col-form-label text-md-right">就業区分</label>
              <select name="employment_category">
                @foreach ($employment_categorys as $employment_category)
                  <option value = {{$employment_category->value}} @if($employment_category->value == $b->employment_category) selected @endif> {{$employment_category->name}} </option>
                @endforeach
              </select>
      </div>

      <div class="form-group row">
        <label for="submit_h" class="col-md-4 col-form-label text-md-right"></label>
            <button type="submit" class="btn btn-info">送信</button>
      </div>

    </form>
  @endsection
