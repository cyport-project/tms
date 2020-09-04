<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title> TMS </title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
  @extends('layouts.base')
  @section('main')
    <table class="table table-striped table-sm">
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
  @endsection
</body>
</html>
