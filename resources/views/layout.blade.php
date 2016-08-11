<!DOCTYPE html>
<html>
	<head>
		<title>Pictweet</title>
		<meta charset="utf-8">
		<link href="/css/a.css" href="/css/style.css" rel="stylesheet" type="text/css">

		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Unica+One::latin' ] }
	      	};

			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();
    	</script>
	</head>

	<body>
		<header class="header">
			<div class="header__bar row">
				<h1 class="grid-6"><a href="/">PicTweet</a></h1>
				@if (Auth::check())
					<div class="user_nav grid-6">
						<span>
							{{Auth::user()->name}}
							<ul class="user__info">
								<li>
									<a href="#">マイページ</a>
									<a href="/logout" method="delete">ログアウト</a>
								</li>
							</ul>
						</span>
						<a class="post" href="/tweets/new">投稿する</a>
					</div>
				@else
					<div class="grid-6">
						<a href="/login" class="post">ログイン</a>
						<a href="/register" class="post">新規登録</a>
					</div>
				@endif
			</div>
		</header>

		@yield('content')

		<footer>
			<p>
				Copyright PicTweet 2014.
			</p>
		</footer>
	</body>
</html>
