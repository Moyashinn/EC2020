@extends('layout.app')

@section('content')
	<form action="/_register" method="post">
		<p>ユーザーネーム <input type="text"></p>
		<p>メールアドレス  <input type="email"></p>
		<p>パスワード	   <input type="password"></p>
		<p>パスワード確認  <input type="password_re"></p>
		<p><button type="submit">送信</button>
	</form>
@endsection