<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Zudbu</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- Laravel nice font and app specific CSS -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <!-- <link href="/css/app.css" rel="stylesheet" type="text/css"> THIS IS THE GULP CSS-->
    <link href="/css/zudbu.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/articles/body">Body</a></li>
            <li><a href="/articles/mind">Mind</a></li>
            <li><a href="/articles/spirit">Spirit</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contribute<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/articles/create">New Article</a></li>
                <li><a href="/articles/edit/{id?}">Edit Article</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          {!! Form::open(array('url' => '/articles','class'=>'form navbar-form navbar-left searchform')) !!}
            {!! Form::text('search', null,
                             array('required',
                                  'class'=>'form-control search',
                                  'placeholder'=>'Search for articles...')) !!}
            {!!Form::submit('Search &raquo;', array('class' => 'btn btn-default btn-success search'))!!}
          {!! Form::close() !!}
        </div><!--/.navbar-collapse -->
      </div>
    </nav>



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        {{-- Main page content will be yielded here --}}
        <h1>Zudbu</h1> <!--To do: Replace with a nice logo-->
        @yield('title')

        @yield('content')
      </div>
    </div>

  <!-- Expanded content goes here -->
    <div class="container">
      @yield('body')
    </div> <!-- /container -->


    <div class="container">
      @if(\Session::has('flash_message'))
         <div class='flash_message'>
             {{ \Session::get('flash_message') }}
         </div>
      @endif
      <hr>
      <footer>
        <p>&copy; Zudbu 2015</p>
      </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="sassets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
