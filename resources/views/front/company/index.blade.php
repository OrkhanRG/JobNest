@extends('layouts.front')
@section('title', 'Şirkətlər')

@push('css')
@endpush

@section('content')
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Şirkətlər</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('front.index') }}">anasəhifə</a></li>
                        <li class="active">şirkətlər</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->

    <!-- ===== Start of Main Wrapper Companies Section ===== -->
    <section class="ptb80" id="companies">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Start of Company Letters -->
                    <div class="company-letters">
                        <a href="#A">A</a><a href="#B">B</a>
                        <a href="#C">C</a>
                        <a href="#D">D</a>
                        <a href="#E">E</a>
                        <a href="#F">F</a>
                        <a href="#G">G</a>
                        <a href="#H">H</a>
                        <a href="#I">I</a>
                        <a href="#J">J</a>
                        <a href="#K">K</a>
                        <a href="#L">L</a>
                        <a href="#M">M</a>
                        <a href="#N">N</a>
                        <a href="#O">O</a>
                        <a href="#P">P</a>
                        <a href="#Q">Q</a>
                        <a href="#R">R</a>
                        <a href="#S">S</a>
                        <a href="#T">T</a>
                        <a href="#U">U</a>
                        <a href="#V">V</a>
                        <a href="#W">W</a>
                        <a href="#X">X</a>
                        <a href="#Y">Y</a>
                        <a href="#Z">Z</a>
                    </div>
                    <!-- End of Company Letters -->

                    <!-- Start of Companies -->
                    <div class="row companies-grid mt60">

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="A" class="company-letter"><h4>A</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="{{ route('front.company.details') }}">AdRoll (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="{{ route('front.company.details') }}">Aol. (1)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="B" class="company-letter"><h4>B</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Behance (4)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="C" class="company-letter"><h4>C</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">CodePen (2)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="D" class="company-letter"><h4>D</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="E" class="company-letter"><h4>E</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="F" class="company-letter"><h4>F</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Facebook (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Foursquare (2)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="G" class="company-letter"><h4>G</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Google (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">GitHub (2)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="H" class="company-letter"><h4>H</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="I" class="company-letter"><h4>I</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="J" class="company-letter"><h4>J</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="K" class="company-letter"><h4>K</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="L" class="company-letter"><h4>L</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="M" class="company-letter"><h4>M</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="N" class="company-letter"><h4>N</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="O" class="company-letter"><h4>O</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="P" class="company-letter"><h4>P</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">PayPal (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Pinterest (2)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="Q" class="company-letter"><h4>Q</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="R" class="company-letter"><h4>R</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="S" class="company-letter"><h4>S</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">StackOverflow (7)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Shopify (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Starbucks (2)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="T" class="company-letter"><h4>T</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="U" class="company-letter"><h4>U</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="V" class="company-letter"><h4>V</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="W" class="company-letter"><h4>W</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="X" class="company-letter"><h4>X</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">
                                <li class="company-name">
                                    <a href="company-page-1.html">Desk (2)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Disqus (1)</a>
                                </li>

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="Y" class="company-letter"><h4>Y</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Company Group -->
                        <div class="col-md-4 col-sm-6 col-xs-12 company-group">
                            <div id="Z" class="company-letter"><h4>Z</h4></div>

                            <!-- Companies -->
                            <ul class="nopadding">

                                <li class="company-name">
                                    <a href="company-page-1.html">Dribbble (3)</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- End of Companies -->

                </div>
            </div>
        </div>
    </section>
    <!-- ===== End of Main Wrapper Companies Section ===== -->

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
