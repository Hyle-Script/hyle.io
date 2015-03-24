@extends('site.layouts.app')


@section('content')
  <div class="container">
    <div class="row article">
      <div class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
        <div class="title">
          <h2>{{ $article->title }}</h2>
          <div class="text-muted">
            Published on <span class="date">{{ date("F d, Y", strtotime($article->publish_date)) }}</span>
          </div>
        </div>
        <div class="content">
          {!! Markdown::parse($article->content) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="comments col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
         <div id="disqus_thread"></div>
          <script type="text/javascript">
              /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
              var disqus_shortname = 'hyle-io'; // required: replace example with your forum shortname

              /* * * DON'T EDIT BELOW THIS LINE * * */
              (function() {
                  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                  dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
              })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
    </div>
  </div>
@endsection