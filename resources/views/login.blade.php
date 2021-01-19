@extends('layout.app')

@section('content')
	<form action="/_login" method="post">
		<p>ユーザーネーム <input type="text"></p>
		<p>パスワード	   <input type="password"></p>
		<p><button type="submit">送信</button>
	</form>
@endsection