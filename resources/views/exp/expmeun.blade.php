 @extends('layouts.base')
<style>
	table.auto{table-layout: auto;
	width:100%;
	border-collapse: separate;
	}
	table{
    margin-bottom: 30px;
}
caption{
    font-style: 16px;
    font-weight: bold;
}
table,
table th,
table td{
    border: 1px solid #000;
}

</style>
</div>
  @section('main')
  スタッフ経験一覧表示画面
<table class="auto">
<tr>
	<th></th>
	<th>社員ID</th>
	<th>氏名</th>
	<th>機種・OS</th>
	<th>DB/DC</th>
	<th>言語・ツール</th>
</tr>
<tr>
@foreach ($items as $item)
 <td></td>
 <td><a href="http://localhost:8000/expview/?s_id={{$item->s_id}}" class="btn btm-info">{{$item->s_id}}</td>
 <td>{{$item->name}}</td>
 <td>{{$item->mod_os}}</td>
 <td>{{$item->DB_DC}}</td>
 <td>{{$item->lang_tool}}</td>
</tr>
@endforeach
</table>
	<form method="get" action="">
		<p>
 			<label for="ID">社員ID</label>
 			<input type="search" name="s" placeholder="社員ID">
		</p>
	<label for="fullname">氏名</label>
			<input type="search" name="s" placeholder="氏名">
		<p>
			<label for="fullname">絞り込み検索</label>
			<input type="submit" value="検索">
		</p>
	</form>
<a href="http://localhost:8000/skilledit" class="btn btn-info">戻る</a>
  @endsection
</html>