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
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Laravel nice font and app specific CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
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
          <a class="navbar-brand" href="#">Zudbu Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
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
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Zudbu</h1>
        <p>Reliable information to nurture your body, mind and spirit.</p>

            <!-- Carousel
            ================================================== -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <!-- <img class="first-slide" src="images/broccoli.jpg" alt="First slide" > -->
                  <img class="small" src="images/broccoli_350.jpg" alt="First slide" >
                  <img class="medium" src="images/broccoli_720.jpg" alt="First slide" >
                  <img class="big" src="images/broccoli.jpg" alt="First slide" >

                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Broccoli?.</h1>
                      <p>WHO lists processed meats as carcinogenic.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">More &raquo;</a></p>
                    </div>
                  </div>
                </div>
                <div class="item slider-size">
                  <!-- <img class="second-slide" src="images/fitness.jpg" alt="Second slide" > -->
                  <img class="small" src="images/fitness_350.jpg" alt="Second slide" >
                  <img class="medium" src="images/fitness_720.jpg" alt="Second slide" >
                  <img class="big" src="images/fitness.jpg" alt="Second slide" >

                  <div class="container">r
                    <div class="carousel-caption">
                      <h1>Working out.</h1>
                      <p>30-45 minutes 3 times a week is ideal</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">More &raquo;</a></p>
                    </div>
                  </div>
                </div>
                <div class="item slider-size">
                 <img  class="small" src="images/meditation_350.jpg" alt="Third slide" >
                 <img  class="medium" src="images/meditation_720.jpg" alt="Third slide" >
                 <img  class="big" src="images/meditation.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Live Longer.</h1>
                      <p>Find a sense of purpose.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">More &raquo;</a></p>
                    </div>
                  </div>

                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!-- /.carousel -->
        {!! Form::open(array('url' => '/logs','class'=>'form navbar-form navbar-left searchform')) !!}
          {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control search',
                                'placeholder'=>'Search for articles...')) !!}
          {!!Form::submit('Search &raquo;', array('class' => 'btn btn-default btn-success search'))!!}
        {!! Form::close() !!}
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Body</h2>
          <p>Healthy eating. Maintain a healthy environment. Stretching. Breathing. Working out. Yoga. Massage.  Sleeping. Resting. Sex. Cosmetics. </p>
          <p><a class="btn btn-default" href="#" role="button">View articles &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Mind</h2>
          <p>Learning new things. Concentration and focus. Board games. Daydreaming. Reading. Doing new things. Writing. Crosswords, logic games and puzzles. </p>
          <p><a class="btn btn-default" href="#" role="button">View articles &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Spirit</h2>
          <p>Meditation.  Purpose. Awareness. Gratitude. Music. Gardening. Letting go. Friends and family. Social networks. Hobbies. Volunteer. </p>
          <p><a class="btn btn-default" href="#" role="button">View articles &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Zudbu 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
