  @extends('layouts.base')
  @section('main')
	<form method="post" action="">
@csrf
スタッフ経験新規登録画面
 <div class="form-group">
 	<label for="name">氏名</label>
 	<p>
 	<input type="text" name="name">
 	</p>
 	<label for="industry">業種</label>
 	<p>
 	<input type="text" name="industry">
 	</p>
 	 	<label for="phase">担当フェーズ</label>
 	<p>
 	<input type="text" name="phase" >
 	</p>
 	 	<label for="pro_name">プロジェクト名</label>
 	<p>
 	<input type="text" name="pro_name">
 	</p>
 	 	<label for="pro_content">プロジェクト概要</label>
 	<p>
 	<input type="text" name="pro_content"">
 	</p>
 	 	<label for="notices">特記事項</label>
 	<p>
 	<input type="text" name="notices">
 	</p>
 	 	<label for="start_period">就業開始</label>
 	<p>
 	<input type="text" name="start_period">
 	</p>
 	 	<label for="end_period">就業終了</label>
 	<p>
 	<input type="text" name="end_period">
 	</p>
 	 	<label for="content">業務内容</label>
 	<p>
 	<input type="text" name="content">
 	</p>
 	 	<label for="result">実績</label>
 	<p>
 	<input type="text" name="result" >
 	</p>
  	 	<label for="mod_os">機種・OS</label>
 	<p>
 	<input type="text" name="mod_os">
 	</p>
   	 	<label for="DB_DC">DB/DC</label>
 	<p>
 	<input type="text" name="DB_DC">
 	</p>
   	 	<label for="lang_tool">言語・ツール</label>
 	<p>
 	<input type="text" name="lang_tool">
 	</p>
		<p>
			<input type="submit" value="確定">
		</p>
 </div>
	</form>
  @endsection
