@extends('layouts.front')
@section('title', 'Şifrəmi Unutdum')

@push('css')
@endpush

@section('content')
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Şifrəmi Unutdum</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('front.index') }}">anasəhifə</a></li>
                        <li class="active">şifrəmi unutdum</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of Login - Register Section ===== -->
    <section class="ptb80" id="login">
        <div class="container">
            <div class="col-md-6 col-md-offset-3 col-xs-12">

                <!-- Start of Login Box -->
                <div class="login-box">

                    <div class="login-title">
                        <h4>Şifrəmi Unutdum</h4>
                    </div>

                    <!-- Start of Login Form -->
                    <form action="{{ route('forgot-password') }}" method="POST">
                        @csrf
                        <!-- Form Group -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email ünvanınız">
                        </div>

                        <!-- Form Group -->
                        <div class="form-group text-center">
                            <button class="btn btn-blue btn-effect">Doğrulama e-mail göndər</button>
                        </div>

                    </form>
                    <!-- End of Login Form -->
                </div>
                <!-- End of Login Box -->

            </div>
        </div>
    </section>
    <!-- ===== End of Login - Register Section ===== -->





    <!-- ===== Start of Get Started Section ===== -->
    <section class="get-started ptb40">
        <div class="container">
            <div class="row ">

                <!-- Column -->
                <div class="col-md-10 col-sm-9 col-xs-12">
                    <h3 class="text-white">20,000+ People trust Cariera! Be one of them today.</h3>
                </div>

                <!-- Column -->
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <a href="#" class="btn btn-blue btn-effect">get start now</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ===== End of Get Started Section ===== -->
@endsection

@push('js')
@endpush
