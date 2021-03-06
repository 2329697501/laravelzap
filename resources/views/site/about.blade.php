@extends('layout.master')

@section('content')
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>About Laravel Zap!</h3>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /blue -->

   <div class="container mtb">
    <div class="row">

      <div class="col-lg-8 larger-font col-lg-offset-2">

        <h3 class="ctitle">Static site generators are all the rage right now</h3>
        <p>First off, I always want a fast-loading site with as few (or no) external
          dependencies that could potentially bring a site down. I am not always
          able to achieve that for various reasons, but I do try.
          I also wanted something that
          is simple to deploy, maintain, and manage, but I did not
          want to give up using Laravel. I looked at <a href="https://jigsaw.tighten.co">Jigsaw</a>
          (which is really great by the way), but it was not exactly what I
          was looking for. And this might not be what I am looking for either.
          But I am going to keep working on it until it is.
        </p>
        <h3 class="ctitle">Laravel Zap<i class="fa fa-bolt" aria-hidden="true"></i> can also handle markdown</h3>
        <p>
          For instance, this markdown<br>
          <code>Emphasis, aka italics, with *asterisks* or _underscores_.</code>
          <br>
          Becomes this:<br>
          <strong>{!! $markdown !!}</strong><br>
          I am working on creating other examples on how to better use markdown in the
          app. It is forthcoming.
        </p>
        <p>Stay tuned for updates...</p>

      </div>
    </div><! --/row -->
   </div><! --/container -->
@endsection
