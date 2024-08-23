@extends('layouts.front')
@section('title', 'Dacil Ol')

@push('css')
@endpush

@section('content')
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>register</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">pages</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->

    <!-- ===== Start of Login - Register Section ===== -->
    <section class="ptb80" id="register">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Start of Nav Tabs -->
                    <ul class="nav nav-tabs" role="tablist">

                        <!-- Personal Account Tab -->
                        <li role="presentation" class="active">
                            <a href="#personal" aria-controls="personal" role="tab" data-toggle="tab" aria-expanded="true">
                                <h6>Personal Account</h6>
                                <span>I'm looking for a job</span>
                            </a>
                        </li>

                        <!-- Company Account Tab -->
                        <li role="presentation" class="">
                            <a href="#company" aria-controls="company" role="tab" data-toggle="tab" aria-expanded="false">
                                <h6>Company Account</h6>
                                <span>We are hiring</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Nav Tabs -->



                    <!-- Start of Tab Content -->
                    <div class="tab-content ptb60">

                        <!-- Start of Tabpanel for Personal Account -->
                        <div role="tabpanel" class="tab-pane active" id="personal">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group mb30">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group text-center">
                                        <input type="checkbox" id="agree">
                                        <label for="agree">Agree with the <a href="#">Terms and Conditions</a></label>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group text-center nomargin">
                                        <button type="submit" class="btn btn-blue btn-effect">Hesab Yarat</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Tabpanel for Personal Account -->

                        <!-- Start of Tabpanel for Company Account -->
                        <div role="tabpanel" class="tab-pane" id="company">
                            <div class="row">

                                <!-- Start of the First Column -->
                                <div class="col-md-6">

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <!-- End of the First Column -->

                                <!-- Start of the Second Column -->
                                <div class="col-md-6">

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <!-- End of the Second Column -->
                            </div>

                            <div class="row mt20">
                                <div class="col-md-12 text-center">

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <input type="checkbox" id="agree2">
                                        <label for="agree2">Agree with the <a href="#">Terms and Conditions</a></label>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group nomargin">
                                        <button type="submit" class="btn btn-blue btn-effect">Hesab Yarat</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End of Tabpanel for Company Account -->

                    </div>
                    <!-- End of Tab Content -->

                </div>
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
