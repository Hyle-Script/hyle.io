@extends('site.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="introduction">
        <div class="pull-right">
          <a href="{{ URL::Route('pastes.raw', [$paste->encoded_id]) }}" class="btn btn-default">Raw</a>
          <a href="/paste" class="btn btn-primary">New</a>
        </div>
        <h2>Pastebin</h2>
      </div>
    </div>
  </div>
  <pre><code>{{ $paste->paste }}</code></pre>
</div>
@endsection
