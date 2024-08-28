<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Mobile viewport optimized -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- Meta Tags - Description for Search Engine purposes -->
    <meta name="description" content="Cariera - Job Board HTML Template">
    <meta name="keywords" content="cariera job board, HTML Template, job board html, job listing, job portal, job postings, jobs, recruiters, recruiting, recruitment">
    <meta name="author" content="GnoDesign">

    <!-- Website Title -->
    <title>@yield('title') | JonNest</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">

    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    @stack('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>

<header class="header1">
    <nav class="navbar navbar-default navbar-static-top fluid_header centered">
        <div class="container">

            <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                <a class="navbar-brand nomargin" href="{{ route('front.index') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"></a>
            </div>

            <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                    <ul class="nav navbar-nav pull-right">

                        <li class="mobile-title">
                            <h4>Əsas menyu</h4></li>

                        <li class="menu-item active">
                            <a href="{{ route('front.index') }}" class="dropdown-toggle" data-toggle="dropdown" role="button">Anasəhifə</a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('front.job-search') }}" class="dropdown-toggle" data-toggle="dropdown" role="button">İş elanları</a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('front.resume-search') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"> CV-lər</a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('front.companies') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"> Şirkətlər</a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('front.blogs') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"> Bloq</a>
                        </li>

                        <!-- Login Menu Item -->
                        <li class="menu-item login-btn">
                            <a id="modal_trigger" href="{{ route('login') }}" role="button"><i class="fa fa-lock"></i>Daxil Ol</a>
                        </li>

                        {{--<li class="menu-item login-btn">
                            <a id="modal_trigger" href="javascript:void(0)" role="button"><i class="fa fa-lock"></i>login</a>
                        </li>--}}

                    </ul>
                </div>
            </div>

        </div>
    </nav>
</header>
