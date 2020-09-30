@extends('layouts.base')
@section('title','個人情報一覧')
@section('main')

<!-- フォーム -->
<form method="post" action="{{action('skill\registerController@register')}}">
@csrf

<!-- 得意分野入力 -->
<div class="container" margin-bottom ="30px" padding-bottom="30px">
  <div>
    <label> 得意分野・得意技術 </label>
  </div>
  <div class="col-12">
    <textarea style="width:100%;" rows="3" name="speciality">{{old('speciality')}}</textarea>
  </div>
</div>

<!-- 各スキル入力エリア -->
<div class="container">
    <label> 各スキル </label>
<!-- 1段目 -->
  <div class="row" style="padding-bottom:2em;">
<!-- 1番目のスキル -->
    <div class="col-4 table-responsive" style="height: 8em;">
      <label> {{$_1[0]->skill_category}} </label>

    <table class="table table-sm table-bordered">
      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

      @foreach ($_1 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
             {{Form::select($record->skill_id,$years,null,['placeholder' => '
             ',])}}
        </td>
      </tr>
      @endforeach
    </table>
  </div>

<!-- 2番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_2[0]->skill_category}} </label>
      <table class="table table-sm table-bordered">
        <tr>
          <th style="width:70%"> 名前 </th>
          <th> 期間（年）</th>
        </tr>

        @foreach ($_2 as $record)
        <tr>
          <td> {{$record->skill_name}} </td>
          <td>
              {{Form::select($record->skill_id, $years,null,['placeholder' => '
              ',])}}
           </td>
        </tr>
        @endforeach
      </table>
    </div>

<!-- 3番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_3[0]->skill_category}} </label>
      <table class="table table-sm table-bordered">
        <tr>
          <th style="width:70%"> 名前 </th>
          <th> 期間（年）</th>
        </tr>

      @foreach ($_3 as $record)
        <tr>
          <td> {{$record->skill_name}} </td>
          <td>
              {{Form::select($record->skill_id, $years,null,['placeholder' => '
              ',])}}
          </td>
        </tr>
      @endforeach
    </table>
  </div>
</div>

<!-- 2段目 -->
<div class="row" style="padding-bottom:2em;">
<!-- 4番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_4[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">
      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_4 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>

<!-- 5番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_5[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">
      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_5 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>

<!-- 6番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_6[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">

      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_6 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>
</div>

<!-- ３段目 -->
<div class="row" style="padding-bottom:2em;">
<!-- 7番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_7[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">

      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_7 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>

<!-- 8番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_8[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">

      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_8 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>

<!-- 9番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_9[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">
      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_9 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>
</div>
<!-- 4段目 -->
<div class="row" style="padding-bottom:2em;">
<!-- 10番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_10[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">
      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_10 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>

<!-- 11番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_11[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">
      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_11 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>

<!-- １2番目のスキル -->
  <div class="col-4 table-responsive" style="height: 8em;">
    <label> {{$_12[0]->skill_category}} </label>
    <table class="table table-sm table-bordered">
      <tr>
        <th style="width:70%"> 名前 </th>
        <th> 期間（年）</th>
      </tr>

    @foreach ($_12 as $record)
      <tr>
        <td> {{$record->skill_name}} </td>
        <td>
            {{Form::select($record->skill_id, $years,null,['placeholder' => '
            ',])}}
        </td>
      </tr>
    @endforeach
    </table>
  </div>
</div>
</div>
<div class="container">
  <div class="row">
    <label for="lang_tool" class="col-md-8"></label>
      <div class="col-md-4　text-md-left">
        <input type="button" class="btn btn-info" onclick="history.back()" value="戻る">
        <input type="submit" class="btn btn-info" value="確定">
      </div>
  </div>
</div>
</form>

@endsection
