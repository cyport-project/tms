  @extends('layouts.base')
  @section('title','ホーム')
  @section('main')
    <div class="form-group row">
    <table class="table table-striped">
      <thead>
      <tr>
        <th id="publication_date_h" size="100" > 掲載日 </th>
        <th id="publisher_h"size="100" > 掲載者 </th>
        <th id= "content_h" size="200"> 連絡事項 </th>
      </tr>
    </thead>
    </tbody>
      @foreach ($records as $record)
      <tr>
        <td> {{$record->publication_date}} </td>
        <td> {{$record->publisher}}</td>
        <td> {{$record->content}}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  @endsection
