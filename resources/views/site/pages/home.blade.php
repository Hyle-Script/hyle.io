@extends('site.layouts.app')


@section('content')
<div class="jumbotron">
  <div class="container">
    <div class="col-md-6 col-lg-6">
      <div class="js-hyle-panel visible-md visible-lg hyle-panel">
<pre><code>layers:
  - type: null
    name: Camera Controlller
  - type: camera
    parent: Camera Controller
  - type: solid
    3D: true
</code></pre>

<pre class="hidden"><code>effects:
  - name: Scale up with time
    type: transform
    properties:
      scale:
        expression: time
  </code></pre>
<pre class="hidden"><code>folders:
  - Project
  - | Sequences
  - | | Scenes
compositions:
  - name: Scene 1
    folder: Scenes
</code></pre>
        <div class="js-hyle-panel-controls hyle-panel-controls">
          <a href="#" class="js-hyle-panel-prev"><i class="fa fa-chevron-circle-left"></i></a>
          <a href="#" class="js-hyle-panel-next"><i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6">
      <h2 class="tk-omnes-pro">A new way to<br>create & share<br>After Effects content</span>.</h2>
      <h3 class="tk-omnes-pro">Hyle allows you to generate content from a simple and understandable text syntax.</h3>
    </div>
  </div>
</div>

<div class="container marketing">
  <div class="row" id="introduction">
    <div class="col-sm-4 col-md-4 col-lg-4">
      <i class="fa icon-large icon-muted fa-eye"></i>
      <h3>Readable</h3>
      <p>Hyle’s syntax is focused on elegance and readability. What you read is really what you'll get.</p>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
      <i class="fa icon-large icon-muted fa-comments"></i>
      <h3>Shareable</h3>
      <p>Sharing text is easy. Save it as a gist, send it as an email, tweet it or even fax it (but please don't).</p>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
      <i class="fa icon-large icon-muted fa-rocket"></i>
      <h3>Fast</h3>
      <p>Copy, paste, process. Or parse a standalone file. Either way, stay in After Effects and forget the binary ffx files.</p>
    </div>
  </div>

  <hr class="section-divider">

  <div class="section">
    <h3>Start faster, work better</h3>
    <h4>Hassle-free creation of project structures and layers.</h4>
     <div class="row">
       <div class="col-sm-4 col-md-4 col-lg-4">
<pre><code>folders:
  - Assets
  - | Audio
  - | | Music
  - | | V.O.
  - | Footage
  - Scenes
compsositions:
  - name: Titles
    folder: Scenes
    layers:
      - type: Text
        text: That’s one Hyle of a script!</code></pre>
       </div>
       <div class="col-sm-7 col-md-7 col-lg-7 col-offset-1">
          <img src="/assets/site/images/hyle_showcase_folder-structure-and-text-layer.png" class="section-image" alt="">
       </div>
      </div>
    </div>
  <hr class="section-divider section-divider-half">


  <div class="section">
    <h3>Focus on the business</h3>
    <h4>Small and easily manageable chunks of information.</h4>
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4">
<pre><code>effects:
  - name: Isometry
    type: transform
    properties:
      uniform scale: false
      scale width: 86.062
      skew: 30
      skew axis: 45
      rotation: 30</code></pre>
      </div>
      <div class="col-sm-7 col-md-7 col-lg-7 col-offset-1">
        <img src="/assets/site/images/hyle_showcase_isometry-effect.png" class="section-image" alt="">
      </div>
    </div>
  </div>
  <hr class="section-divider section-divider-half">

  <div class="section">
    <h3>Automate everything</h3>
    <h4>Powerful syntax for problems an interface can’t solve.</h4>
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4">
<pre><code>files:
  - path: /path/to/image-01.jpg
    id: 1
  - path: /path/to/image-02.jpg
    id: 2
compsositions:
  - name: Slideshow
  - name: Slideshow images
    parent: Slideshow
    layers:
      - name: image 01
        file: 1
        out point: 1
      - name: image 02
        file: 2
        out point: 2</code></pre>
      </div>
      <div class="col-sm-7 col-md-7 col-lg-7 col-offset-1">
        <img src="/assets/site/images/hyle_showcase_image-slideshow.png" class="section-image" alt="">
      </div>
    </div>
  </div>
  <hr class="section-divider section-divider-half">

  <div class="section">
    <div id="uses">
      <h3>Improve your workflow</h3>
      <h4>Endless possibilities to speed up your process.</h4>
      <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3">
          <i class="icon-muted icon-md fa fa-star"></i>
          <h4>Animation</h4>
          <p class="lead">For that bouncy transition full of funky expressions.</p>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
          <i class="icon-muted icon-md fa fa-tint"></i>
          <h4>Coloration</h4>
          <p class="lead">For that effect stack of your perfect cross process.</p>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3">
          <i class="icon-muted icon-md fa fa-pencil"></i>
          <h4>Design</h4>
          <p class="lead">For that button/text/shape layer style pile.</p>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3">
          <i class="icon-muted icon-md fa fa-folder"></i>
          <h4>Structure</h4>
          <p class="lead">For that folders structure you’re tired of creating.</p>
        </div>
      </div>
      <hr class="section-divider">
    </div>
  </div>
  <div class="section">
    <div class="row" id="subscription">
      <div class="col-lg-12 text-center">
        <h3 class="text-center">Available at aescripts + aeplugins</h3>
        <h4>Try it for 7 days or buy it for 69$.</h4>
        <a href="https://github.com/hyle-script/hyle" target="_blank" class="btn btn-primary btn-lg action-buy event-aescripts">Get it on Github</a>
      </div>
    </div>
  </div>
</div>


@endsection