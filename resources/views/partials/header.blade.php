<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">



  <title>{{config('app.name', 'TLS LTD') }} | @yield('title')</title>

  <!-- Bootstrap 3.3.7 -->

<link rel="stylesheet" type="text/css" href="{{asset('temp/css/form-validation.css')}}">
  <link rel="stylesheet" href="{{asset('temp/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('temp/bower_components/font-awesome/css/font-awesome.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('temp/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->

  <link rel="stylesheet" href="{{asset('temp/dist/css/AdminLTE.min.css')}}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{asset('temp/dist/css/skins/_all-skins.min.css')}}">

   <!-- Morris chart -->
   <link rel="stylesheet" href="{{asset('temp/bower_components/morris.js/morris.css')}}">

   <!-- jvectormap -->
   <link rel="stylesheet" href="{{asset('temp/bower_components/jvectormap/jquery-jvectormap.css')}}">

   <!-- Date Picker -->
   <link rel="stylesheet" href="{{asset('temp/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{asset('temp/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">

   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{asset('temp/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

   <!-- Google Font -->
   {{--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  --}}

 </head>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>T</b>LS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>TLS LTD</b></span>
      </a>


      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar or Topbar part -->

        @include('partials.navbar')
        <!-- Navbar or Topbar part  -->


      </nav>
    </header>

