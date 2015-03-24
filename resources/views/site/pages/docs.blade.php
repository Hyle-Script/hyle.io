@extends('site.layouts.app')


@section('content')

<div class="container">
  <div class="row" id="docs">
      <nav class="col-xs-3 col-sm-3 col-md-3 col-lg-3 sidebar-nav hidden-print">
        {!! Markdown::parse($index) !!}
        </nav>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 docs-content">
        {!! Markdown::parse($content) !!}

      </div>
    </div>
</div>

@endsection