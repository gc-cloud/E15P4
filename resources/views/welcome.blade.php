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
                {!! Form::open(array('url' => 'foo/bar')) !!}
                This is a form!

                {!! Form::close() !!}
                {!!Form::password('password', array('class' => 'awesome'))!!}Password<br>
                {!!Form::radio('something', 'value')!!}Pick something<br>
                {!!Form::radio('something', 'value')!!}Pick smething else<br>
                {!!Form::submit('Click Me!', array('class' => 'btn btn-primary'))!!}
              </div>

                </div>
            </div>
        </div>
    </body>
</html>
