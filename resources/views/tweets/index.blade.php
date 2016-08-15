@extends('layout')

@section('content')
	<div class="contents row">
		@forelse($tweets as $tweet)
			<div class="content_post" style="background-image: url({{$tweet->image}});">
				<div class="more">
					<span><img 'arrow_top.png'></span>
					<ul class="more_list">
						<li><a href="/tweets/{{$tweet->id}}">詳細</a></li>
						<li><a href="/tweets/{{$tweet->id}}/edit">編集</a></li>
						<li><a href="/tweets/{{$tweet->id}}/delete">削除</a></li>
					</ul>
				</div>

				<p>{{$tweet->text}}</p>
				<span class="name">
					<a href="#"><span>投稿者</span>{{Auth::user()->name}}</a>
				</span>
			</div>
		@empty
		@endforelse
		{{ $tweets->render() }}
	</div>
@endsection
