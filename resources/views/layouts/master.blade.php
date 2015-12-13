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


    <!-- Laravel nice font and app specific CSS -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <!-- <link href="/css/app.css" rel="stylesheet" type="text/css"> THIS IS THE GULP CSS-->
    <link href="/css/zudbu.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('head')
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
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li {!!\Request::is("/")? 'class="active"' : ''!!}><a href="/">Home</a></li>
            <li {!!\Request::is("articles/body")? 'class="active"' : ''!!}><a href="/articles/body">Body</a></li>
            <li {!!\Request::is("articles/mind")? 'class="active"'  : ''!!}><a href="/articles/mind">Mind</a></li>
            <li {!!\Request::is("articles/spirit")? 'class="active"'  : ''!!}><a href="/articles/spirit">Spirit</a></li>


            @if($user)
            <!-- show contribute menu to authenticated users -->
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
          {!! Form::open(array('url' => '/login','class' => 'navbar-form navbar-right')) !!}
          <a name="login"></a>
          @if($user)
              <p class="headeritem">Logged in as {{ $user->name }} <a href='/logout'> [ Logout ]</a></p>
            @else
              <div class='form-group'>
                  <input type='text' name='email' id='email' placeholder="Email" value='{{ old('email') }}' class="form-control">
              </div>

              <div class='form-group'>
                  <input type='password' name='password' id='password' placeholder="Password" value='{{ old('password') }}' class="form-control">
              </div>

              <!-- Future: remember me
              <div class='form-group'>
                  <input type='checkbox' name='remember' id='remember'>
                  <label for='remember' class='checkboxLabel'>Remember me</label>
              </div> -->
              <button type='submit' class='btn btn-primary'>Login</button>
              <p class="headeritem">Not a user?<a href='/register'>  Register </a></p>
              @endif
          {!! Form::close() !!}

          <!-- Future: Search box -->
          <!-- {!! Form::open(array('url' => '/articles','class'=>'form navbar-form navbar-left searchform')) !!}
            {!! Form::text('search', null,
                             array('required',
                                  'class'=>'form-control search',
                                  'placeholder'=>'Search for articles...')) !!}
            {!!Form::submit('Search &raquo;', array('class' => 'btn btn-default btn-success search'))!!}
          {!! Form::close() !!} -->

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        {{-- Main page content will be yielded here --}}
        @if(Session::has('flash_message'))
          <br>
           <div class="flash_message" >
               <h3>{{Session::get('flash_message') }}</h3>
           </div>
        @endif
        <h1 class="inline">Zudbu</h1> <!--Future: Site logo-->
        <p> nurture your body, mind and spirit.</p>

        @yield('title')
        @yield('content')
      </div>
    </div>

  <!-- Expanded content goes here -->
    <div class="container">
      @yield('body')
    </div> <!-- /container -->


    <div class="container">

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
  </body>
</html>
