@extends('layouts.front')
@section('title', 'CV-lər')

@push('css')
@endpush

@section('content')
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header" id="find-candidate">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>CV-lər</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">anasəhifə</a></li>
                        <li class="active">cv-lər</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->

    <!-- ===== Start of Main Wrapper Section ===== -->
    <section class="find-candidate ptb80">
        <div class="container">

            <!-- Start of Form -->
            <form class="row" action="#" method="get">

                <!-- Start of keywords input -->
                <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2 col-xs-8">
                    <label for="search-keywords">Açar söz...</label>
                    <input type="text" name="search-keywords" id="search-keywords" class="form-control" placeholder="Açar söz...">
                </div>

                <!-- Start of submit input -->
                <div class="col-md-2 col-sm-2 col-xs-4">
                    <button type="submit" class="btn btn-blue btn-effect"><i class="fa fa-search"></i>Axtar</button>
                </div>

            </form>
            <!-- End of Form -->


            <!-- Start of Row -->
            <div class="row mt60">

                <!-- Start of Candidate Main -->
                <div class="col-md-12 candidate-main">

                    <!-- Start of Candidates Wrapper -->
                    <div class="candidate-wrapper">

                        <!-- ===== Start of Single Candidate 1 ===== -->
                        <div class="single-candidate row nomargin">

                            <!-- Candidate Image -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-img">
                                    <a href="{{ route('front.resume-details') }}">
                                        <img src="{{ asset('assets/images/candidates/candidate1.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Start of Candidate Name & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">

                                <!-- Candidate Name -->
                                <div class="candidate-name">
                                    <a href="{{ route('front.resume-details') }}"><h5>john doe</h5></a>
                                </div>

                                <!-- Candidate Info -->
                                <div class="candidate-info mt5">
                                    <ul class="list-inline">
                                        <li>
                                            <span><i class="fa fa-money"></i>$3000 min.</span>
                                        </li>

                                        <li>
                                            <span><i class="fa fa-map-marker"></i>Melbourn, Australia</span>
                                        </li>

                                        <li>
                                            <span><i class="fa fa-briefcase"></i>Web Developer</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Candidate Name & Info -->

                            <!-- CTA -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-cta ptb30">
                                    <a href="{{ route('front.resume-details') }}" class="btn btn-blue btn-small btn-effect">hire me</a>
                                </div>
                            </div>

                        </div>
                        <!-- ===== End of Single Candidate 1 ===== -->


                        <!-- ===== Start of Single Candidate 2 ===== -->
                        <div class="single-candidate row nomargin">

                            <!-- Candidate Image -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-img">
                                    <a href="{{ route('front.resume-details') }}">
                                        <img src="{{ asset('assets/images/candidates/candidate2.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Start of Candidate Name & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">

                                <!-- Candidate Name -->
                                <div class="candidate-name">
                                    <a href="{{ route('front.resume-details') }}"><h5>janie roe</h5></a>
                                </div>

                                <!-- Candidate Info -->
                                <div class="candidate-info mt5">
                                    <ul class="list-inline">
                                        <li>
                                            <span><i class="fa fa-money"></i>$2000 min.</span>
                                        </li>

                                        <li>
                                            <span><i class="fa fa-map-marker"></i>Berlin, Germany</span>
                                        </li>

                                        <li>
                                            <span><i class="fa fa-briefcase"></i>Graphic Designer</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Candidate Name & Info -->

                            <!-- CTA -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-cta ptb30">
                                    <a href="{{ route('front.resume-details') }}" class="btn btn-blue btn-small btn-effect">hire me</a>
                                </div>
                            </div>

                        </div>
                        <!-- ===== End of Single Candidate 2 ===== -->


                        <!-- ===== Start of Single Candidate 3 ===== -->
                        <div class="single-candidate row nomargin">

                            <!-- Candidate Image -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-img">
                                    <a href="{{ route('front.resume-details') }}">
                                        <img src="{{ asset('assets/images/candidates/candidate3.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Start of Candidate Name & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">

                                <!-- Candidate Name -->
                                <div class="candidate-name">
                                    <a href="{{ route('front.resume-details') }}"><h5>john doe</h5></a>
                                </div>

                                <!-- Candidate Info -->
                                <div class="candidate-info mt5">
                                    <ul class="list-inline">
                                        <li>
                                            <span><i class="fa fa-money"></i>$2500 min.</span>
                                        </li>

                                        <li>
                                            <span><i class="fa fa-map-marker"></i>Milan, Italy</span>
                                        </li>

                                        <li>
                                            <span><i class="fa fa-briefcase"></i>UI Designer</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Candidate Name & Info -->

                            <!-- CTA -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-cta ptb30">
                                    <a href="{{ route('front.resume-details') }}" class="btn btn-blue btn-small btn-effect">hire me</a>
                                </div>
                            </div>

                        </div>
                        <!-- ===== End of Single Candidate 3 ===== -->


                        <!-- ===== Start of Single Candidate 4 ===== -->
                        <div class="single-candidate row nomargin">

                            <!-- Candidate Image -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-img">
                                    <a href="{{ route('front.resume-details') }}">
                                        <img src="{{ asset('assets/images/candidates/candidate4.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Start of Candidate Name & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">

                                <!-- Candidate Name -->
                                <div class="candidate-name">
                                    <a href="{{ route('front.resume-details') }}"><h5>janie roe</h5></a>
                                </div>

                                <!-- Candidate Info -->
                                <div class="candidate-info mt5">
                                    <ul class="list-inline">
                                        <li>
                                            <span class="location"><i class="fa fa-money"></i>$3500 min.</span>
                                        </li>

                                        <li>
                                            <span class="location"><i class="fa fa-map-marker"></i>New York, USA</span>
                                        </li>

                                        <li>
                                            <span class="location"><i class="fa fa-briefcase"></i>WordPress Developer</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Candidate Name & Info -->

                            <!-- CTA -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-cta ptb30">
                                    <a href="{{ route('front.resume-details') }}" class="btn btn-blue btn-small btn-effect">hire me</a>
                                </div>
                            </div>

                        </div>
                        <!-- ===== End of Single Candidate 4 ===== -->


                        <!-- ===== Start of Single Candidate 5 ===== -->
                        <div class="single-candidate row nomargin">

                            <!-- Candidate Image -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-img">
                                    <a href="{{ route('front.resume-details') }}">
                                        <img src="{{ asset('assets/images/candidates/candidate5.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Start of Candidate Name & Info -->
                            <div class="col-md-8 col-xs-6 ptb20">

                                <!-- Candidate Name -->
                                <div class="candidate-name">
                                    <a href="{{ route('front.resume-details') }}"><h5>janie roe</h5></a>
                                </div>

                                <!-- Candidate Info -->
                                <div class="candidate-info mt5">
                                    <ul class="list-inline">
                                        <li>
                                            <span class="location"><i class="fa fa-money"></i>$3000 min.</span>
                                        </li>

                                        <li>
                                            <span class="location"><i class="fa fa-map-marker"></i>Melbourn, Australia</span>
                                        </li>

                                        <li>
                                            <span class="location"><i class="fa fa-briefcase"></i>Photographer</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Candidate Name & Info -->

                            <!-- CTA -->
                            <div class="col-md-2 col-xs-3">
                                <div class="candidate-cta ptb30">
                                    <a href="{{ route('front.resume-details') }}" class="btn btn-blue btn-small btn-effect">hire me</a>
                                </div>
                            </div>

                        </div>
                        <!-- ===== End of Single Candidate 5 ===== -->

                    </div>
                    <!-- End of Candidates Wrapper -->

                    <!-- Start of Pagination -->
                    <div class="col-md-12 mt10">
                        <ul class="pagination list-inline text-center">
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <!-- End of Pagination -->

                </div>
                <!-- End of Candidate Main -->

            </div>
            <!-- End of Row -->

        </div>
    </section>
    <!-- ===== End of Main Wrapper Section ===== -->
@endsection

@push('js')
@endpush
