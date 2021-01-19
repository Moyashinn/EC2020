<html>
	<head>
		<title>タイトル - @yield('title')</title>
		<!-- フォント -->
		<link href='https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet'>
		<!-- ｽﾀｲﾙ -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<!-- スクリプト -->
			    <script src="{{ asset('js/app.js') }}" defer></script>
	</head>
	<body>
		<div class="topbar">
			@section('topbar')
			<div class="container text-conter">
				<h1>ECサイト</h1>
			</div>
			<nav class="navbar navbar-expand-md navbar-light bg-secondary">
				<ul class="navbar-nav bd-navbar-nav flex-row mr-auto">
					<li class="nav-item">
						<a class="nav-link text-white" href="/EC/public/">ホーム</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="/EC/public/">買い物</a>
					</li>
				</ul>
				<ul class="navbar-nav bd-navbar-nav flex-row">
					<li class="nav-item">
						<a class="nav-link text-white" href="/EC/public/">ログイン</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="/EC/public/">設定</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="/EC/public/">買い物かご</a>
					</li>
				</ul>
			</nav>
    </ul>
			@show
		</div>
		<div class="sidebar">
			@section('sidebar')
				
			@show
		</div>
		<div id="app" class="contener">
			@yield('content')
		</div>
	</body>
</html>