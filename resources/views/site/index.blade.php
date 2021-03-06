@extends('layout.master')

@section('content')
<div id="headerwrap">
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h1>A Laravel Powered Static Site Generator</h1>
        <h2><svg style="height:32px; width: 48px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="84.1px" height="57.6px" viewBox="0 0 84.1 57.6" enable-background="new 0 0 84.1 57.6" xml:space="preserve"><defs></defs>
        <path fill="#FB503B" d="M83.8,26.9c-0.6-0.6-8.3-10.3-9.6-11.9c-1.4-1.6-2-1.3-2.9-1.2s-10.6,1.8-11.7,1.9c-1.1,0.2-1.8,0.6-1.1,1.6
        	c0.6,0.9,7,9.9,8.4,12l-25.5,6.1L21.2,1.5c-0.8-1.2-1-1.6-2.8-1.5C16.6,0.1,2.5,1.3,1.5,1.3c-1,0.1-2.1,0.5-1.1,2.9
        	c1,2.4,17,36.8,17.4,37.8c0.4,1,1.6,2.6,4.3,2c2.8-0.7,12.4-3.2,17.7-4.6c2.8,5,8.4,15.2,9.5,16.7c1.4,2,2.4,1.6,4.5,1
        	c1.7-0.5,26.2-9.3,27.3-9.8c1.1-0.5,1.8-0.8,1-1.9c-0.6-0.8-7-9.5-10.4-14c2.3-0.6,10.6-2.8,11.5-3.1C84.2,28,84.4,27.5,83.8,26.9z
        	 M37.5,36.4c-0.3,0.1-14.6,3.5-15.3,3.7c-0.8,0.2-0.8,0.1-0.8-0.2C21.2,39.6,4.4,4.8,4.1,4.4c-0.2-0.4-0.2-0.8,0-0.8
        	c0.2,0,13.5-1.2,13.9-1.2c0.5,0,0.4,0.1,0.6,0.4c0,0,18.7,32.3,19,32.8C38,36.1,37.8,36.3,37.5,36.4z M77.7,43.9
        	c0.2,0.4,0.5,0.6-0.3,0.8c-0.7,0.3-24.1,8.2-24.6,8.4c-0.5,0.2-0.8,0.3-1.4-0.6s-8.2-14-8.2-14L68.1,32c0.6-0.2,0.8-0.3,1.2,0.3
        	C69.7,33,77.5,43.6,77.7,43.9z M79.3,26.3c-0.6,0.1-9.7,2.4-9.7,2.4l-7.5-10.2c-0.2-0.3-0.4-0.6,0.1-0.7c0.5-0.1,9-1.6,9.4-1.7
        	c0.4-0.1,0.7-0.2,1.2,0.5c0.5,0.6,6.9,8.8,7.2,9.1C80.3,26,79.9,26.2,79.3,26.3z"></path></svg> <a style="color:#FB503B;" href="https://laravel.com">Laravel</a> Power with Static Site Speed</h2>
      </div>
      <div class="col-lg-8 col-lg-offset-2 himg">
        <img src="/storage/img/browser.png" class="img-responsive">
      </div>
    </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->

<div id="cwrap">
  <div class="container">
   <div class="row centered">
     <h2>How It Works</h2>
     <h4>Simply put: it generates static HTML files from your Laravel application.</h4>
     <div class="col-lg-6 col-lg-offset-3">
       <p>
         You can use Blade files. You can use controllers and models. You can
         use all the delcious MVC goodness that Laravel offers. For a blazing
         fast experience, use Laravel Zap<i class="fa fa-bolt" aria-hidden="true"></i>
         as your front end and connect it to an API via <a target="_blank" href="https://lumen.laravel.com/">Lumen</a>.
       </p>
       <p>
         Use 'gulp watch' for a super fast development experience. I am working on a
         blog post and video that will demonstrate how you can use 'gulp' to create
         an amazing site in no time at all.
       </p>
     </div>
   </div><! --/row -->
  </div><! --/container -->
</div><! --/cwrap -->

<div id="service">
 <div class="container">
   <div class="row centered">
     <div class="col-md-4">
       <i class="fa fa-github"></i>
       <h4>Open Source</h4>
       <p>Clone it: 'git clone git@github.com:asugrad/laravelzap.git'. Or just download it using the button below.
         Warning: This is very much an early alpha launch. It is very experimental
         and as unstable as most of my ex-girlfriends.
       </p>
       <p><br/><a target="_blank" href="https://github.com/asugrad/laravelzap/archive/master.zip" class="btn btn-theme">Download</a></p>
     </div>
     <div class="col-md-4">
       <i class="fa fa-hand-spock-o"></i>
       <h4>Free to Use</h4>
       <p>But if you want to buy me a really nice rye whiskey, I will not stop you
       from doing so. And if you use it somewhere or really, really like it, let me know.
     Or you can always buy me something from my Amazon wish list.</p>
       <p><br/><a target="_blank" href="http://a.co/5HwgmX7" class="btn btn-theme">Wishlist</a></p>
     </div>
     <div class="col-md-4">
       <i class="fa fa-bug"></i>
       <h4>Help Make It OSM</h4>
       <p>OSM = Awesome. I have been developing for a long time. But I am
         deeply flawed. But together we can make this app great. Please ask for
         a pull request of the source code and contribute to making <strong>Laravel
         Zap</strong> better.</p>
       <p><br/><a target="_blank" href="https://github.com/asugrad/laravelzap" class="btn btn-theme">GitHub</a></p>
     </div>
   </div>
 </div><! --/container -->
</div><! --/service -->

@endsection
