@extends('site.layouts.app')


@section('content')
<div class="container index">

  @foreach ($categories as $category)

    <div class="row">

      <div class="col-lg-12 col-md-12">

        <h2 class="underlined">{{ $category->title }}</h2>

        @foreach (array_chunk($category->demos->all(), 3) as $demosRow)

          <div class="row">
            @foreach ($demosRow as $demo)
              <div class="col-md-4 col-lg-4 demo">
                <h3 class="title"><a href="{{ URL::route('gallery.show', $demo->id) }}">{{ $demo->title }}</a></h3>
                <div class="description">{!! Markdown::parse($demo->description) !!}</div>

                <a href="{{ URL::route('gallery.show', $demo->id) }}" class="pre-link">
                  <img src="{{ $aws }}{{ $demo->image }}" alt="" class="thumbnail">
                </a>

                <a href="{{ URL::route('gallery.show', $demo->id) }}" class="pre-link">
                  <pre class="code closed">{!! $demo->code !!}</pre>
                </a>
              </div>
            @endforeach
          </div>
        @endforeach

      </div>

    </div>

  @endforeach

</div>
@endsection

