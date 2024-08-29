@extends('layouts.front')
@section('title', 'Yeni Şifrə')

@push('css')
@endpush

@section('content')
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Yeni Şifrə</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('front.index') }}">anasəhifə</a></li>
                        <li class="active">yeni şifrə</li>
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
                        <h4>Yeni Şifrə</h4>
                    </div>

                    <!-- Start of Login Form -->
                    <form action="{{ route('change-password') }}" method="POST">
                        @csrf
                        <!-- Form Group -->
                        <div class="form-group">
                            <label>Şifrə</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Şifrə">
                        </div>

                        <div class="form-group">
                            <label>Yeni Şifrə</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Şifrə Təkrar">
                        </div>

                        <!-- Form Group -->
                        <div class="form-group text-center">
                            <input type="hidden" name="verify_token" id="verify_token" value="{{ $token ?? NULL }}">
                            <button class="btn btn-blue btn-effect">Şifrəni dəyiş</button>
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
