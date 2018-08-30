<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title> LaraJax @yield('title')</title>


<link rel="icon" type="image/x-icon" href="{{ asset('dist/img/laravel-ico.ico') }}">
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="{{asset('fonts/ionicons.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
			folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.padding-sidebar-sub-menu{
				padding-left: 20px !important;
			}
			.label-required{
				font-size: 15px;
				color: red;
			}
			.required {
				font-size: 12px;
				color: red;
			}
			html {
			  font-size: 10px;
			  -webkit-tap-highlight-color: transparent;
			}

			body {
			  font-family: "Roboto", Helvetica, Arial, sans-serif;
			  font-size: 14px;
			  line-height: 1.6;
			  color: #636b6f;
			  background-color: #f5f8fa;
			}
		</style>
		@yield('customcss')
	</head>