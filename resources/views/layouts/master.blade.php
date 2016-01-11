<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Simple and reliable wellness facts. Simple wellness facts. Reliable wellness facts.
    Easy wellness.  Simple and reliable health facts. Simple health facts. Reliable health facts. Easy health facts. Body, mind and spirit.
    Unity. Well-being. Diet. Fitness. Meditation.">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Facts4Wellness</title>

    <!-- CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/jumbotron.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href="/css/zudbu.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
  </head>

  <body>
    <div id="wrapper"> <!-- Main area with content, footer at the bottom -->
    @include('layouts.navigation')

    {{-- Main jumbotron for primary message  --}}
    <div class="jumbotron">
      <div class="container">
        {{-- Main page content will be yielded here --}}
        @if(Session::has('flash_message'))
          <br>
          <div class="flash_message" >
             <h3>{{Session::get('flash_message') }}</h3>
          </div>
        @endif
        <h1 id="logoAll"><a id="logoText" href="/"><img  id="logoImg" class="img-responsive"
          src="/images/zudbu_logo.png" alt="Zudbu Logo"> Facts4Wellness.com </a></h1>
        <p> Simple and reliable information for wellness enthusiasts.</p>
        @yield('title')
        @yield('content')
      </div>
    </div>

    <!-- Expanded content goes here -->
    <div class="container" id="content">
      @yield('body')
    </div>
    <!-- Footer -->

    <div class="container">
      <footer>
        <ul class="footerItem">
          <li>&copy; Facts4Wellness 2016</li>
          <li><a href="/about">About</a></li>
          <li><a href="/privacy">Privacy</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </footer>
    </div>
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
  </body>
</html>
