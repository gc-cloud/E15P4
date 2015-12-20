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
    <div <div id="wrapper"> <!-- Main area with content, footer at the bottom -->> <!-- Main area with content, footer at the bottom -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li {!!\Request::is("/")? 'class="active"' : ''!!}><a href="/">Home</a></li>
            <li {!!\Request::is("articles/body")? 'class="active"' : ''!!}><a href="/articles/body">Body</a></li>
            <li {!!\Request::is("articles/mind")? 'class="active"'  : ''!!}><a href="/articles/mind">Mind</a></li>
            <li {!!\Request::is("articles/spirit")? 'class="active"'  : ''!!}><a href="/articles/spirit">Spirit</a></li>
            @if(!$user)
              <li {!!\Request::is("register")? 'class="active"'  : ''!!}><a href="/register">Register</a></li>
            @endif

            {{-- Contribute options only avalable to contributors or administrators users --}}
            @if($user AND ($user->role->role==='administrator' OR $user->role->role==='contributor'))
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contribute<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/articles/create">New Article</a></li>
                  <li><a href="/articles/edit/search">Edit/Delete Article</a></li>
                </ul>
              </li>
            @endif
          </ul>
          <!-- Sign-in/Register or Logout -->
          {!! Form::open(array('url' => '/login','class' => 'navbar-form  right')) !!}
          @if($user)
              <p class="headeritem">Logged in as {{ $user->name }} <a href='/logout'> [ Logout ]</a></p>
          @else
              <div class='form-group'>
                  <input type='text' name='email' id='email_login' placeholder="Email" value='{{ old('email') }}' class="form-control">
              </div>
              <div class='form-group'>
                  <input type='password' name='password' id='password_login' placeholder="Password" value='{{ old('password') }}' class="form-control">
              </div>
              <button type='submit' class='btn btn-primary'>Login</button>
          @endif
          {!! Form::close() !!}
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

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
        <h1 > Zudbu <img  class="logo" src="/images/zudbu_logo.png" alt="Zudbu Logo"></h1>
        <p> nurture your body, mind and spirit.</p>
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
          <li>&copy; Zudbu 2015</li>
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
