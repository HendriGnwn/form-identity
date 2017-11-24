<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Qelopak">
	<meta name="author" content="Hendri Gunawan">
	<title>Qelopak | Account Registration</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/skins/square/grey.css') }}" rel="stylesheet">

    <link href="{{ asset('web/css/date_time_picker.css') }}" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('web/css/custom.css') }}" rel="stylesheet">
    
	<script src="{{ asset('web/js/modernizr.js') }}"></script>
	<!-- Modernizr -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-xs-12 text-center">
                    <div id="logo_home">
                        <h1><a href="{!! url('') !!}">Qelopak</a></h1>
                    </div>
                </div>
<!--                <div class="col-xs-9">
                    <div id="social">
                        <ul>
                            <li><a href="javascript:;;"><i class="icon-facebook"></i></a></li>
                            <li><a href="javascript:;;"><i class="icon-twitter"></i></a></li>
                            <li><a href="javascript:;;"><i class="icon-google"></i></a></li>
                            <li><a href="javascript:;;"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                     /social 
                    <nav>
                        <ul class="cd-primary-nav">
                            <li><a href="index.html" class="animated_link">Register Version</a></li>
                            <li><a href="reservation_version.html" class="animated_link">Reservation Version</a></li>
                            <li><a href="questionare_version.html" class="animated_link">Questionare Version</a></li>
                            <li><a href="review_version.html" class="animated_link">Review Version</a></li>
                            <li><a href="about.html" class="animated_link">About Us</a></li>
                            <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>-->
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<main>
		<div id="form_container">
			@yield('content')
		</div><!-- /Form_container -->
	</main>
	
	<footer id="home" class="clearfix">
		<p>© 2017 Qelopak</p>
		<ul>
			<li><a href="http://www.atc.co.id" class="animated_link" target="_blank">Qelopak</a></li>
		</ul>
	</footer>
	<!-- end footer-->
	
	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->

	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="{{ asset('web/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
	<!-- Common script -->
	<script src="{{ asset('web/js/common_scripts_min.js') }}"></script>
	<!-- Menu script -->
	<script src="{{ asset('web/js/velocity.min.js') }}"></script>
	<script src="{{ asset('web/js/main.js') }}"></script>
	<!-- Theme script -->
	<script src="{{ asset('web/js/functions.js') }}"></script>
    
    @stack('script')
    
</body>
</html>