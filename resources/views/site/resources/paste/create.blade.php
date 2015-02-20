@extends('site.layouts.app')


@section('content')
<div class="container">
  <form action="{{ URL::route('pastes.store') }}" method="post" id="paster">
    <div class="introduction">
      <div class="pull-right">
        <input type="submit" value="Save" class="btn btn-primary">
      </div>
      <h2>Pastebin</h2>
    </div>
    <textarea name="paste" id="" cols="30" rows="25" placeholder="Your hyle code..."></textarea>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  </form>
</div>
@endsection
