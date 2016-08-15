@extends('layout')

@section('content')
	<div class ="contents row">
		<div class="content_post" style="background-image: url({{ $tweet->image }});">
			@if (Auth::check())
				<div class="more">
					<span><img 'arrow_top.png'></span>
					<ul class="more_list">
						<li><a href="/tweets/{{$tweet->id}}">詳細</a></li>
						<li><a href="/tweets/{{$tweet->id}}/edit">編集</a></li>
						<li><a href="/tweets/{{$tweet->id}}" data-method="delete">削除</a></li>
					</ul>
				</div>

				<p>{{$tweet->text}}</p>
				<span class="name">
					<a href="#"><span>投稿者</span>{{Auth::user()->name}}</a>
				</span>
			@endif
		</div>

		<div class="container">
			@if (Auth::check())
				{!! Form::open(['url' => "/tweets/$tweet->id/comments"]) !!}
					<textarea cols="30" name="text" placeholder="コメントする" rows="2"></textarea>
					<input type="submit" value="SENT">
  				{!! Form::close() !!}
			@endif
			<div class="comments">
  				<h4><コメント一覧></h4>
				@if ($comments)
					@forelse($comments as $comment)
	  					<p>
							<strong><a href="/users/{{ $comment->user_id }}">{{Auth::user()->name}}</a>:</strong>
							{{ $comment->text }}
	  					</p>
					@empty
					@endforelse
				@endif
			</div>
		</div>
	</div>
@endsection
