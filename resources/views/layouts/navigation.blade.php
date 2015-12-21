    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
           data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
              <li {!!\Request::is("register")? 'class="active"'  : ''!!}><a href="/password/email">Reset Password</a></li>
            @endif

            {{-- Contribute options only avalable to contributors or administrators users --}}
            @if($user AND ($user->role->role==='administrator' OR $user->role->role==='contributor'))
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Contribute<span class="caret"></span></a>
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
                  <input type='text' name='email' id='email_login' placeholder="Email"
                  value='{{ old('email') }}' class="form-control">
              </div>
              <div class='form-group'>
                  <input type='password' name='password' id='password_login'
                  placeholder="Password" value='{{ old('password') }}' class="form-control">
              </div>
              <button type='submit' class='btn btn-primary'>Login</button>
          @endif
          {!! Form::close() !!}
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
