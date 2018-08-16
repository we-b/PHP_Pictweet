@extends('layout')

@section('content')
<div class="contents row">
  @foreach($tweets as $tweet)
    <div class="content_post" style="background-image: url({{ $tweet->image }});">
      @if (Auth::check() && Auth::user()->id == $tweet->user_id)
        <div class="more">
          <span><img src="images/arrow_top.png"></span>
          <ul class="more_list">
            <li><a href="/tweets/{{$tweet->id}}/edit">編集</a></li>
            <li><a href="/tweets/{{ $tweet->id }}/delete">削除</a></li>
          </ul>
        </div>
      @endif

      <p>{{ $tweet->text }}</p>
      <span class="name">
        <a href="#">
          <span>投稿者</span>{{ $tweet->user->name }}
        </a>
      </span>
    </div>
  @endforeach

  {{ $tweets->links() }}
</div>
@endsection
