@extends('layouts.front')
@section('title', 'X Şirkət')

@push('css')
@endpush

@section('content')
    <!-- ===== Start of Candidate Profile Header Section ===== -->
    <section class="profile-header">
    </section>
    <!-- ===== End of Candidate Header Section ===== -->


    <!-- ===== Start of Main Wrapper Company Profile Section ===== -->
    <section class="pb80" id="company-profile">
        <div class="container">

            <!-- Start of Row -->
            <div class="row company-profile">

                <!-- Start of Profile Picture -->
                <div class="col-md-3 col-xs-12">
                    <div class="profile-photo">
                        <img src="{{ asset('assets/images/companies/envato.svg') }}" class="img-responsive" alt="">
                    </div>

                    <!-- Start of Social Media Buttons -->
                    <ul class="social-btns list-inline text-center mt20">
                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll facebook transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll twitter transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll google-plus transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll instagram transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll linkedin transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <!-- End of Social Media Buttons -->

                </div>
                <!-- End of Profile Picture -->

                <!-- Start of Profile Description -->
                <div class="col-md-9 col-xs-12">
                    <div class="profile-descr">

                        <!-- Profile Title -->
                        <div class="profile-title">
                            <h2 class="capitalize">envato</h2>
                            <h5 class="pt10">Marketplace</h5>
                        </div>

                        <!-- Profile Details -->
                        <div class="profile-details mt20">
                            <p>Envato Market is a collection of themed marketplaces, where creatives sell digital assets to help bring your ideas to life.</p>
                        </div>

                        <ul class="profile-info mt20 nopadding">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Melbourn, Australia</span>
                            </li>

                            <li>
                                <i class="fa fa-globe"></i>
                                <a href="#">envato.com</a>
                            </li>

                            <li>
                                <i class="fa fa-phone"></i>
                                <span>(+1) 123 456 7890</span>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- End of Profile Description -->

            </div>
            <!-- End of Row -->

        </div>
    </section>
    <!-- ===== End of Company Profile Section ===== -->


    <!-- ===== Start of Related Company Jobs Section ===== -->
    <section class="company-jobs ptb80">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="pb60">Our Latest Jobs</h3>
                </div>
            </div>

            <!-- ===== Start of Single Job Post 1 ===== -->
            <div class="single-job-post row shadow-hover">
                <!-- Job Company -->
                <div class="col-md-2 col-xs-3 nopadding">
                    <div class="job-company">
                        <a href="#">
                            <img src="{{ asset('assets/images/companies/envato.svg') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- Job Title & Info -->
                <div class="col-md-8 col-xs-6 ptb20">
                    <div class="job-title">
                        <a href="job-page.html">php senior developer</a>
                    </div>
                </div>

                <!-- Job Category -->
                <div class="col-md-2 col-xs-3 ptb30">
                    <div class="job-category">
                        <a href="javascript:void(0)" class="btn btn-green btn-small btn-effect">full time</a>
                    </div>
                </div>
            </div>
            <!-- ===== End of Single Job Post 1 ===== -->

            <!-- ===== Start of Single Job Post 2 ===== -->
            <div class="single-job-post row mt30 shadow-hover">
                <!-- Job Company -->
                <div class="col-md-2 col-xs-3 nopadding">
                    <div class="job-company">
                        <a href="#">
                            <img src="{{ asset('assets/images/companies/envato.svg') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- Job Title & Info -->
                <div class="col-md-8 col-xs-6 ptb20">
                    <div class="job-title">
                        <a href="job-page.html">Graphic Designer</a>
                    </div>
                </div>

                <!-- Job Category -->
                <div class="col-md-2 col-xs-3 ptb30">
                    <div class="job-category">
                        <a href="javascript:void(0)" class="btn btn-purple btn-small btn-effect">part time</a>
                    </div>
                </div>
            </div>
            <!-- ===== End of Single Job Post 2 ===== -->

            <!-- ===== Start of Single Job Post 3 ===== -->
            <div class="single-job-post row mt30 shadow-hover">
                <!-- Job Company -->
                <div class="col-md-2 col-xs-3 nopadding">
                    <div class="job-company">
                        <a href="#">
                            <img src="{{ asset('assets/images/companies/envato.svg') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- Job Title & Info -->
                <div class="col-md-8 col-xs-6 ptb20">
                    <div class="job-title">
                        <a href="job-page.html">Wordpress Developer</a>
                    </div>
                </div>

                <!-- Job Category -->
                <div class="col-md-2 col-xs-3 ptb30">
                    <div class="job-category">
                        <a href="javascript:void(0)" class="btn btn-green btn-small btn-effect">full time</a>
                    </div>
                </div>
            </div>
            <!-- ===== End of Single Job Post 3 ===== -->

            <div class="row mt30">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn btn-blue btn-effect">show all</a>
                </div>
            </div>


        </div>
    </section>
    <!-- ===== End of Related Company Jobs Section ===== -->


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
