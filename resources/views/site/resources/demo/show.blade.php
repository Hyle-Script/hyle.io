@extends('site.layouts.app')

@section('admin-subnav')
  <div class="pull-right">
    <a href="{{ URL::route('gallery.edit', $demo->id) }}" class="btn btn-default">Edit</a>
    <a href="{{ URL::route('gallery.delete', $demo->id) }}" class="btn btn-danger js-confirm">Delete</a>
  </div>
@endsection

@section('content')
<div class="container single">
  <div class="subnav">
    <a href="{{ URL::route('gallery.index') }}" class="btn btn-default">Back to gallery</a>
    <div class="clearfix"></div>
  </div>
  <div class="demo">
    <h3 class="title">{{ $demo->title }}</h3>
    <div class="row">
      <div class="col-sm-4 col-md-4">
        <img src="{{ $aws }}{{ $demo->image }}" alt="" class="thumbnail">
        <p class="description">{!! Markdown::parse($demo->description) !!}</p>
      </div>
      <div class="col-sm-8 col-md-8">
        <pre class="code">{{{ $demo->code }}}</pre>
      </div>
    </div>
  </div>
</div>

@endsection