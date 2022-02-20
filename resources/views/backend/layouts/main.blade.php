	<!doctype html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>{{ config('app.name', 'Laravel') }}</title>

	    <!-- Fonts -->
	    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	    <!-- Styles -->
	    <!-- Google Font: Source Sans Pro -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	  <!-- Font Awesome Icons -->
	  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
	  <style>
      .description{
      	resize: none;
      	height: 400px;
      	width: 1000px;
      	border-radius: 5px;
      }
    </style>
	</head>
	<body class="hold-transition sidebar-mini">
	<div class="wrapper">

	  <!-- Navbar -->
	  	@include('backend/layouts.header')
	  <!-- /.navbar -->

	  <!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
	    <!-- Brand Logo -->
	    <a href="{{route('home')}}" class="brand-link">
	      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	      <span class="brand-text font-weight-light">AdminLTE 3</span>
	    </a>

	    <!-- Sidebar -->
	    	@include('backend/layouts.sidebar')
	    <!-- /.sidebar -->
	</aside>

	  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    @yield('content')
	</div>
		<!-- /.content-wrapper -->

	  	<!-- Main Footer -->
		@include('backend/layouts.footer')
	</div>
	</body>
	<!-- jQuery -->
	<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
	<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
	</html>
