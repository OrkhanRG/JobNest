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
    <title>@yield('title')</title>
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

            <!-- Logo -->
            <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                <a class="navbar-brand nomargin" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"></a>
                <!-- INSERT YOUR LOGO HERE -->
            </div>

            <!-- ======== Start of Main Menu ======== -->
            <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Start of Main Nav -->
                <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                    <ul class="nav navbar-nav pull-right">

                        <!-- Mobile Menu Title -->
                        <li class="mobile-title">
                            <h4>main menu</h4></li>

                        <!-- Simple Menu Item -->
                        <li class="dropdown simple-menu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">home<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.html">home 1</a></li>
                                <li><a href="index-02.html">home 2 - slider</a></li>
                                <li><a href="index-03.html">home 3</a></li>
                                <li><a href="index-04.html">boxed version</a></li>
                            </ul>
                        </li>

                        <!-- Simple Menu Item -->
                        <li class="dropdown simple-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">For Candidates<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="search-jobs-1.html">search jobs 1</a></li>
                                <li><a href="search-jobs-2.html">search jobs 2</a></li>
                                <li><a href="search-jobs-3.html">search jobs 3</a></li>
                                <li><a href="search-jobs-4.html">search jobs 4</a></li>
                                <li><a href="submit-resume.html">submit resume</a></li>
                            </ul>
                        </li>

                        <!-- Simple Menu Item -->
                        <li class="dropdown simple-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">for employers<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="find-candidate-1.html">find a candidate 1</a></li>
                                <li><a href="find-candidate-2.html">find a candidate 2</a></li>
                                <li><a href="post-job.html">post a job</a></li>
                            </ul>
                        </li>

                        <!-- Mega Menu Item -->
                        <li class="dropdown mega-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">pages<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <!-- Start of Mega Menu Inner -->
                                    <div class="mega-menu-inner">
                                        <div class="row">
                                            <ul class="col-md-4">
                                                <li class="menu-title">pages 1</li>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="contact-1.html">contact us 1</a></li>
                                                <li><a href="contact-2.html">contact us 2</a></li>
                                                <li><a href="companies.html">companies</a></li>
                                                <li><a href="company-page-1.html">company page 1</a></li>
                                                <li><a href="company-page-2.html">company page 2</a></li>
                                            </ul>

                                            <ul class="col-md-4">
                                                <li class="menu-title">pages 2</li>
                                                <li><a href="candidate-profile-1.html">candidate profile 1</a></li>
                                                <li><a href="candidate-profile-2.html">candidate profile 2</a></li>
                                                <li><a href="candidate-profile-3.html">candidate profile 3</a></li>
                                                <li><a href="faq.html">faq</a></li>
                                                <li><a href="job-page.html">job page</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                            </ul>

                                            <ul class="col-md-4">
                                                <li class="menu-title">pages 3</li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="404-2.html">404 ver. 2</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="lost-password.html">lost password</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End of Mega Menu Inner -->
                                </li>
                            </ul>
                        </li>
                        <!-- End of Mega Menu Item -->

                        <!-- Simple Menu Item -->
                        <li class="dropdown simple-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">elements<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">headers<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="header1.html">header 1 - default</a></li>
                                        <li><a href="header2.html">header 2 - logo top</a></li>
                                        <li><a href="header3.html">header 3 - top bar</a></li>
                                        <li><a href="header4.html">header 4 - sticky</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">footers<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="footer1.html">default</a></li>
                                        <li><a href="footer2.html">light</a></li>
                                        <li><a href="footer3.html">dark</a></li>
                                        <li><a href="footer4.html">simple</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">page headers<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-header1.html">default</a></li>
                                        <li><a href="page-header2.html">light</a></li>
                                        <li><a href="page-header3.html">dark</a></li>
                                        <li><a href="page-header4.html">parallax</a></li>
                                    </ul>
                                </li>

                                <li><a href="buttons.html">buttons</a></li>
                                <li><a href="pricing-tables.html">pricing tables</a></li>
                                <li><a href="typography.html">typography</a></li>
                            </ul>
                        </li>

                        <!-- Simple Menu Item -->
                        <li class="dropdown simple-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">blog<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">blog right sidebar<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-right-sidebar-v1.html">version 1</a></li>
                                        <li><a href="blog-right-sidebar-v2.html">version 2</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">blog left sidebar<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-left-sidebar-v1.html">version 1</a></li>
                                        <li><a href="blog-left-sidebar-v2.html">version 2</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">blog fullwidth<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-fullwidth-v1.html">version 1</a></li>
                                        <li><a href="blog-fullwidth-v2.html">version 2</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">masonry<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-masonry-4col.html">4 columns</a></li>
                                        <li><a href="blog-masonry-3col.html">3 columns</a></li>
                                        <li><a href="blog-masonry-2col.html">2 columns</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">single post<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-post-right-sidebar.html">post - right sidebar</a></li>
                                        <li><a href="blog-post-left-sidebar.html">post - left sidebar</a></li>
                                        <li><a href="blog-post.html">post - fullwidth</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Simple Menu Item -->
                        <li class="dropdown simple-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">shop<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">shop<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-right-sidebar.html">shop - right sidebar</a></li>
                                        <li><a href="shop-left-sidebar.html">shop - left sidebar</a></li>
                                        <li><a href="shop-fullwidth.html">shop - fullwidth</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown Submenu -->
                                <li class="dropdown-submenu">
                                    <a href="#">single product<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-product-right-sidebar.html">product - right sidebar</a></li>
                                        <li><a href="shop-product-left-sidebar.html">product - left sidebar</a></li>
                                        <li><a href="shop-product.html">product - fullwidth</a></li>
                                    </ul>
                                </li>

                                <li><a href="cart.html">cart</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                            </ul>
                        </li>

                        <!-- Login Menu Item -->
                        <li class="menu-item login-btn">
                            <a id="modal_trigger" href="javascript:void(0)" role="button"><i class="fa fa-lock"></i>login</a>
                        </li>

                    </ul>
                </div>
                <!-- End of Main Nav -->
            </div>
            <!-- ======== End of Main Menu ======== -->

        </div>
    </nav>
</header>
