@extends('layouts.front')
@section('title', 'İş elanları')

@push('css')
@endpush

@section('content')
    <!-- ===== Start of Main Wrapper Section ===== -->
    <section class="search-jobs ptb80" id="version2">
        <div class="container">

            <!-- Start of Row -->
            <div class="row">

                <!-- ===== Start of Job Sidebar ===== -->
                <div class="col-md-4 col-xs-12 job-post-sidebar">

                    <!-- Search Location -->
                    <div class="search-location">
                        <input type="text" name="search-location" class="form-control" placeholder="Location">
                    </div>

                    <!-- Job Types -->
                    <div class="job-types mt30">
                        <h4>Job Type</h4>

                        <ul class="list-inline mt20">
                            <li>
                                <input type="checkbox" id="full-time">
                                <label for="full-time">Full Time</label>
                            </li>

                            <li>
                                <input type="checkbox" id="part-time">
                                <label for="part-time">Part Time</label>
                            </li>

                            <li>
                                <input type="checkbox" id="freelance">
                                <label for="freelance">Freelance</label>
                            </li>

                            <li>
                                <input type="checkbox" id="intership">
                                <label for="intership">Intership</label>
                            </li>

                            <li>
                                <input type="checkbox" id="temporary">
                                <label for="temporary">Temporary</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Job Types -->
                    <div class="job-categories mt30">
                        <h4 class="pb20">Categories</h4>

                        <select name="search-categories" class="selectpicker" id="search-categories" data-live-search="true" title="Any Category" data-size="5" data-container="body">
                            <option value="1">Accountance</option>
                            <option value="2">Banking</option>
                            <option value="3">Design & Art</option>
                            <option value="4">Developement</option>
                            <option value="5">Insurance</option>
                            <option value="6">IT Engineer</option>
                            <option value="7">Healthcare</option>
                            <option value="8">Marketing</option>
                            <option value="9">Management</option>
                        </select>
                    </div>

                    <!-- Job Types -->
                    <div class="job-types mt30">

                        <ul class="list-inline">
                            <li>
                                <input type="checkbox" id="salary">
                                <label for="salary">Filter by Salary</label>
                            </li>

                            <li>
                                <input type="checkbox" id="rate">
                                <label for="rate">filter by Rate</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Advertisment -->
                    <div class="job-advert mt30">
                        <a href="#">
                            <img src="{{ asset('assets/images/img/advert.jpg') }}" class="img-responsive" alt="">
                        </a>
                    </div>

                </div>
                <!-- ===== End of Job Sidebar ===== -->


                <!-- ===== Start of Job Post Main ===== -->
                <div class="col-md-8 col-xs-12 job-post-main">
                    <h4>We found 234 matches.</h4>

                    <!-- Start of Job Post Wrapper -->
                    <div class="job-post-wrapper mt20">

                        <!-- ===== Start of Single Job Post 1 ===== -->
                        <div class="single-job-post row nomargin">
                            <!-- Job Company -->
                            <div class="col-md-2 col-xs-3 nopadding">
                                <div class="job-company">
                                    <a href="{{ route('front.job-details') }}">
                                        <img src="{{ asset('assets/images/companies/envato.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Job Title & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">
                                <div class="job-title">
                                    <a href="{{ route('front.job-details') }}">php senior developer</a>
                                </div>

                                <div class="job-info">
                                    <span class="company"><i class="fa fa-building-o"></i>Envato</span>
                                    <span class="location"><i class="fa fa-map-marker"></i>Melbourn, Australia</span>
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
                        <div class="single-job-post row nomargin">
                            <!-- Job Company -->
                            <div class="col-md-2 col-xs-3 nopadding">
                                <div class="job-company">
                                    <a href="{{ route('front.job-details') }}">
                                        <img src="{{ asset('assets/images/companies/google.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Job Title & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">
                                <div class="job-title">
                                    <a href="{{ route('front.job-details') }}">department head</a>
                                </div>

                                <div class="job-info">
                                    <span class="company"><i class="fa fa-building-o"></i>Google</span>
                                    <span class="location"><i class="fa fa-map-marker"></i>Berlin, Germany</span>
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
                        <div class="single-job-post row nomargin">
                            <!-- Job Company -->
                            <div class="col-md-2 col-xs-3 nopadding">
                                <div class="job-company">
                                    <a href="{{ route('front.job-details') }}">
                                        <img src="{{ asset('assets/images/companies/facebook.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Job Title & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">
                                <div class="job-title">
                                    <a href="{{ route('front.job-details') }}">graphic designer</a>
                                </div>

                                <div class="job-info">
                                    <span class="company"><i class="fa fa-building-o"></i>facebook</span>
                                    <span class="location"><i class="fa fa-map-marker"></i>london, UK</span>
                                </div>
                            </div>

                            <!-- Job Category -->
                            <div class="col-md-2 col-xs-3 ptb30">
                                <div class="job-category">
                                    <a href="javascript:void(0)" class="btn btn-blue btn-small btn-effect">freelancer</a>
                                </div>
                            </div>
                        </div>
                        <!-- ===== End of Single Job Post 3 ===== -->


                        <!-- ===== Start of Single Job Post 4 ===== -->
                        <div class="single-job-post row nomargin">
                            <!-- Job Company -->
                            <div class="col-md-2 col-xs-3 nopadding">
                                <div class="job-company">
                                    <a href="{{ route('front.job-details') }}">
                                        <img src="{{ asset('assets/images/companies/envato.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Job Title & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">
                                <div class="job-title">
                                    <a href="{{ route('front.job-details') }}">senior UI & UX designer</a>
                                </div>

                                <div class="job-info">
                                    <span class="company"><i class="fa fa-building-o"></i>Envato</span>
                                    <span class="location"><i class="fa fa-map-marker"></i>Melbourn, Australia</span>
                                </div>
                            </div>

                            <!-- Job Category -->
                            <div class="col-md-2 col-xs-3 ptb30">
                                <div class="job-category">
                                    <a href="javascript:void(0)" class="btn btn-orange btn-small btn-effect">intership</a>
                                </div>
                            </div>
                        </div>
                        <!-- ===== End of Single Job Post 4 ===== -->


                        <!-- ===== Start of Single Job Post 5 ===== -->
                        <div class="single-job-post row nomargin">
                            <!-- Job Company -->
                            <div class="col-md-2 col-xs-3 nopadding">
                                <div class="job-company">
                                    <a href="{{ route('front.job-details') }}">
                                        <img src="{{ asset('assets/images/companies/twitter.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Job Title & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">
                                <div class="job-title">
                                    <a href="{{ route('front.job-details') }}">senior health advisor</a>
                                </div>

                                <div class="job-info">
                                    <span class="company"><i class="fa fa-building-o"></i>twitter</span>
                                    <span class="location"><i class="fa fa-map-marker"></i>New York, USA</span>
                                </div>
                            </div>

                            <!-- Job Category -->
                            <div class="col-md-2 col-xs-3 ptb30">
                                <div class="job-category">
                                    <a href="javascript:void(0)" class="btn btn-red btn-small btn-effect">temporary</a>
                                </div>
                            </div>
                        </div>
                        <!-- ===== End of Single Job Post 5 ===== -->

                    </div>
                    <!-- End of Job Post Wrapper -->

                    <!-- Start of Pagination -->
                    <ul class="pagination list-inline text-center">
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                    <!-- End of Pagination -->

                </div>
                <!-- ===== End of Job Post Main ===== -->

            </div>
            <!-- End of Row -->

        </div>
    </section>
    <!-- ===== End of Main Wrapper Section ===== -->

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
