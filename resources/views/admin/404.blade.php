<!doctype html>
<html lang="en" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>404 | Axtardığınız səhifə tapılmadı!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/admin/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/admin/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">

    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="text-center">
                        <img src="{{ asset('assets/admin/images/error400-cover.png') }}" alt="error img" class="img-fluid">
                        <div class="mt-3">
                            <h3 class="text-uppercase">Üzr istəyirik, Səhifə tapılmadı 😭</h3>
                            <p class="text-muted mb-4">Axtardığınız səhifə mövcud deyil!</p>
                            <a href="{{ route('user.index') }}" class="btn btn-secondary"><i class="mdi mdi-home me-1"></i>Anasəhifəyə geri dön</a>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth-page content -->
</div>
<!-- end auth-page-wrapper -->

</body>

</html>
