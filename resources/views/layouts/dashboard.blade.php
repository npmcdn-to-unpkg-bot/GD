<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ url('assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ env('APP_NAME') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap-sweetalert/lib/sweet-alert.css') }}">

    <!-- Animation library for notifications   -->
    <link href="{{ url('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ url('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ url('assets/css/themify-icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ url('bower_components/jquery-ui/themes/smoothness/jquery-ui.css') }}">

    
    

</head>
<body>

<script>
    
            

</script>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                    {{ env('APP_NAME') }}
                </a>
            </div>

            <ul class="nav">

                <li id="dashboard">
                    <a href="{{ url('dashboard') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li  id="users">
                    <a href="{{ url('/users') }}">
                        <i class="ti-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li  id="items">
                    <a href="{{ url('/items') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Items</p>
                    </a>
                </li>
                
                <li  id="maps">
                    <a href="{{ url('/maps') }}">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/dashboard') }}">Dashboard</a>

                </div>
                <div class="collapse navbar-collapse">


                    




                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                
                                

                                

                                

                                <div class="ui-widget">
                                    <i class="ti-search"></i>

                                    <p><input type="text" name="searchInput" 
                                    id="searchInput" class="form-control" required="required" title="" placeholder="Search"></p>     
                                </div>           
                                
                            </a>
                            
                            
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>

                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>

						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="ti-more"></i>
								<p>More</p>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="">Messages</a></li>
                                <li><a href="">Help</a></li>
                                <li><a href="">Settings</a></li>
                                <li><a href="">Lock Screen</a></li>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>


                            
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

            @yield ('content')


            </div>
        </div>
    


    <!-- Footer -->

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="{{ url('/') }}">
                                {{ env('APP_NAME')}}
                            </a>
                        </li>
                        <li>
                            <a href="">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Termini e Condizioni
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> by <a href="http://palmerastudios.com">Palmera</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <!--
    <script src="{{ url('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script> -->

    <script src="{{ url('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ url('bower_components/jquery-ui/jquery-ui.js') }}"></script>
	<script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ url('assets/js/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<!-- <script src="{{ url('assets/js/chartist.min.js') }}"></script> -->

    <!--  Notifications Plugin    -->
    <script src="{{ url('assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <!--
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ url('assets/js/paper-dashboard.js') }}"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ url('assets/js/demo.js') }}"></script>

    <script src="{{ url('assets/angular/angular.js') }}"></script>
    <!-- <script src="{{ url('assets/js/dashboard-main.js') }}"></script>-->

    <!-- Sweet Alert -->
    <script src="{{ url('bower_components/bootstrap-sweetalert/lib/sweet-alert.js') }}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	//demo.initChartist();

            /*
        	$.notify({
            	icon: 'ti-gift',
            	message: "Benvenuto al tuo <b>Dashboard</b> - qui segue una tuo messagggio!."

            },{
                type: 'success',
                timer: 4000
            });
            */

    	});

        /* TODO
            get the lastest version of jquery-ui
            [ For whatever the reason, it doesn't recognize 
            autocomplete() ]
        */      

   
	</script>

    @yield ('scripts')

</html>
