@extends('site.layouts.app')


@section('content')
<div class="container index">
  @foreach($articles as $article)
  <div class="row post">
    <div class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
      <h2 class="title"><a href="{{ $article->link }}">{{ $article->title }}</a></h2>
      <div class="article-content">{!! $article->excerpt !!}</div>
      <p class="read-more">
        <a href="{{ $article->link }}" class="">Read more...</a>
      </p>
    </div>
  </div>
  @endforeach
</div>
@endsection