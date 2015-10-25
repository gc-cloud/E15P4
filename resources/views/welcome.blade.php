<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <!-- <link href="/css/responsive.css" rel="stylesheet" type="text/css"> -->

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title jumbotron">Laravel 5</div>
                <h1> Place holder for P4 - Something Awesome!</h1>
                <div class="form-group">
                {!! Form::open(array('url' => '/logs')) !!}
                  <p>This is a form!</p>
                  {!!Form::password('password', array('class' => 'awesome'))!!} Password<br>
                  {!!Form::radio('something', 'value')!!} Pick something<br>
                  {!!Form::radio('something', 'value')!!} Pick something else<br>
                  {!!Form::submit('Get logs!', array('class' => 'btn btn-primary'))!!}
                {!! Form::close() !!}
              </div>

                </div>
            </div>
        </div>
    </body>
</html>
