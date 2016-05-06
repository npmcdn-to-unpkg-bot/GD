<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ url('assets/paper_img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>{{ env('APP_NAME') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/ct-paper.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/css/demo.css') }}" rel="stylesheet" /> 
    <link href="{{ url('assets/css/examples.css') }}" rel="stylesheet" /> 
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      
</head>
<body>
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
          <ul class="nav navbar-nav navbar-right">

            @if (Auth::guest())
            <li>
                <a href="{{ url('/login') }}" class="btn btn-simple">Login</a>
            </li>
            @endif


            <li>
                <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-facebook"></i></a>
            </li>
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav> 
    
    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">
                                <h3 class="title">Register</h3>

                                <form class="register-form" 
                                method="POST" action="{{ url('/register') }}">

                                {!! csrf_field() !!}


                                <!-- Email -->
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <label>Email</label>
                                        <input type="email" class="form-control"
                                        id="email" name="email" 
                                        placeholder="Enter email"
                                        value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                <!-- Name -->
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                        <label>Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                        value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                <!-- Password -->
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"
                                        value="{{ old('password') }}">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">





                                        <label>Confirm password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter password"
                                        value="{{ old('password') }}">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif


                                        <button class="btn btn-danger btn-block" type="submit">Register</button>
                                    </div>

                                </form>

                                

                            </div>

                        </div>
                    </div>
                </div>     
            <div class="footer register-footer text-center">
                    <h6>&copy; 2016 by {{ env('APP_NAME') }} Inc.</h6>
            </div>
        </div>
    </div>      

</body>

<script src="{{ url('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

<script src="{{ url('assets/js/bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugins -->
<script src="{{ url('assets/js/ct-paper-checkbox.js') }}"></script>
<script src="{{ url('assets/js/ct-paper-radio.js') }}"></script>
<script src="{{ url('assets/js/bootstrap-select.js') }}"></script>
<script src="{{ url('assets/js/bootstrap-datepicker.js') }}"></script>

<script src="{{ url('assets/js/ct-paper.js') }}"></script>
    
</html>