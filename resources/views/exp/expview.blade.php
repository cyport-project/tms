 @extends('layouts.base')
<body>
  @section('main')
@foreach($items as $item)
	<form method="get" action="">
 <div class="form-group">
 <p>スタッフスキル詳細画面</p>
 	<label for="industry">業種</label>
 	<p>
 	<input type="industry" class="form-control" id="industry" placeholder="{{$item->industry}}" readonly >
 	</p>
 </div>
 <div class="form-group">
 	<label for="phase">担当フェーズ</label>
 	<p>
 	<input type="phase" class="form-control" id="phase" placeholder="{{$item->phase}}" readonly >
 	</p>
 </div>
 <div class="form-group">
 	<label for="pro_name">プロジェクト名</label>
 	<p>
 	<input type="pro_name" class="form-control" id="pro_name" placeholder="{{$item->pro_name}}" readonly >
 	</p>
 </div>
 <div class="form-group">
 	<label for="pro_content">プロジェクト概要</label>
 	<p>
 	<input type="pro_content" class="form-control" id="pro_content" placeholder="{{$item->pro_content}}" readonly >
 	</p>
 </div>
 <div class="form-group">
 	<label for="notices">特記事項</label>
 	<p>
 	<input type="notices" class="form-control" id="notices" placeholder="{{$item->notices}}" readonly >
 	</p>
 </div>
 <div class="form-group">
 	<label for="period">就業期間</label>
 	<p>
 	<input type="period" class="form-control" id="period" placeholder="{{$item->start_period}}～{{$item->end_period}}" readonly >
 	</p>
 </div>
 <div class="form-group">
 	<label for="content">業務内容</label>
 	<p>
 	<input type="content" class="form-control" id="content" placeholder="{{$item->content}}" readonly >
 	</p>
 </div>
 <div class="form-group">
 	<label for="result">実績・取り組み</label>
 	<p>
 	<input type="result" class="form-control" id="result" placeholder="{{$item->result}}" readonly >
 	</p>
 </div>
  <div class="form-group">
 	<label for="mod_os">機種・OS</label>
 	<p>
 	<input type="mod_os" class="form-control" id="mod_os" placeholder="{{$item->mod_os}}" readonly >
 	</p>
 </div>
  <div class="form-group">
 	<label for="DB_DC">DB/DC</label>
 	<p>
 	<input type="DB_DC" class="form-control" id="DB_DC" placeholder="{{$item->DB_DC}}" readonly >
 	</p>
 </div>
  <div class="form-group">
 	<label for="lang_tool">言語・ツール</label>
 	<p>
 	<input type="lang_tool" class="form-control" id="lang_tool" placeholder="{{$item->lang_tool}}" readonly >
 	</p>
 </div>
 {{$item->s_id}}
 <div>
	<a href="http://localhost:8000/expedit?s_id={{$item->s_id}}" class="btn btm-info">編集</a>
 </div>
@endforeach
	</form>
  @endsection
</body>
