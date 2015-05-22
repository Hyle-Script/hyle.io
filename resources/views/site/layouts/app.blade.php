<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>{{ $title }}</title>
  <meta name="description" content="{{ $description }}">
  <meta name="author" content="Sébastien Lavoie">
  <meta name="viewport" content="width=device-width">

  <meta property="og:image" content="http://hyle.io/assets/site/images/hyle.png"/>
  <meta property="og:title" content="{{ $title }}"/>
  <meta property="og:description" content="{{ $description }}"/>

  <link rel="author" href="https://plus.google.com/106026178705421202580"/>
  <link rel="publisher" href="http://google.com/+HyleIoscript"/>


  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/assets/site/css/{{$pagename}}.css">

  <script type="text/javascript" src="//use.typekit.net/ixh4lqt.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<!-- <body id="{{ $pagename }}" class="{{ Request::segment(2) }}"> -->
<body id="{{ $pagename }}" class="">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

@include('site.partials.nav')

<div id="content">
  @yield('content')
</div>

{{-- @include('site.partials.footer') --}}

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41854519-1', 'hyle.io');
  ga('send', 'pageview');

</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="/assets/site/javascripts/js/{{$pagename}}.js"></script>


</body>
</html>
