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
                            <a href="#personal" aria-controls="personal" role="tab" data-toggle="tab"
                               aria-expanded="true">
                                <h6>Namizəd Hesabı</h6>
                                <span>İş axtarıram</span>
                            </a>
                        </li>

                        <!-- Company Account Tab -->
                        <li role="presentation" class="">
                            <a href="#company" aria-controls="company" role="tab" data-toggle="tab"
                               aria-expanded="false">
                                <h6>Şirkət Hesabı</h6>
                                <span>İşə qəbul edirik</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Nav Tabs -->


                    <!-- Start of Tab Content -->
                    <div class="tab-content ptb60">

                        <!-- Start of Tabpanel for Candidate Account -->
                        <div role="tabpanel" class="tab-pane active" id="personal">
                            <div class="row">
                                <div class="col-md-12">

                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <!-- Form Group -->
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Ad</label>
                                                <input type="text" name="name" id="name"
                                                       class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? '' }}">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Soyad</label>
                                                <input type="text" name="surname" id="surname"
                                                       class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname') ?? '' }}">
                                                @error('surname')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-md-12">
                                                <label>İstifadəçi Adı</label>
                                                <input type="text" name="username" id="username"
                                                       class="form-control @error('username') is-invalid @enderror" value="{{ old('username') ?? '' }}">
                                                @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-md-12">
                                                <label>E-mail</label>
                                                <input type="email" name="email" id="email"
                                                       class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? '' }}">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-md-6">
                                                <label>Şifrə</label>
                                                <input type="password" name="password" id="password"
                                                       class="form-control @error('password') is-invalid @enderror">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group mb30 col-md-6">
                                                <label>Şifrə Təkrar</label>
                                                <input type="password" name="password_confirmation"
                                                       id="password_confirmation"
                                                       class="form-control @error('password_confirmation') is-invalid @enderror">
                                                @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            @if(false)
                                                <!-- Form Group -->
                                                <div class="form-group text-center">
                                                    <input type="checkbox" id="agree">
                                                    <label for="agree">Agree with the <a href="#">Terms and
                                                            Conditions</a></label>
                                                </div>
                                            @endif

                                            <!-- Form Group -->
                                            <div class="form-group text-center nomargin">
                                                <input type="hidden" name="account_type" id="account_type"
                                                       value="candidate">
                                                <button type="submit" class="btn btn-blue btn-effect">Hesab Yarat
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- End of Tabpanel for Personal Account -->

                        <!-- Start of Tabpanel for Company Account -->
                        <div role="tabpanel" class="tab-pane" id="company">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>Ad</label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name' ?? '') }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Soyad</label>
                                        <input type="text" name="surname" id="surname" class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname' ?? '') }}">
                                        @error('surname')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-md-6">
                                        <label>İstifadəçi Adı</label>
                                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username' ?? '') }}">
                                        @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-md-6">
                                        <label>Şirkət</label>
                                        <input type="text" name="company" id="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company' ?? '') }}">
                                        @error('company')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-md-6">
                                        <label>Sayt</label>
                                        <input type="text" name="website" id="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website' ?? '') }}">
                                        @error('website')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-md-6">
                                        <label>Ünvan</label>
                                        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('email' ?? '') }}">
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Form Group -->
                                    <div class="form-group col-md-12">
                                        <label>E-mail</label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email' ?? '') }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-md-6">
                                        <label>Şifrə</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-md-6">
                                        <label>Şifrə Təkrar</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                               class="form-control @error('password_confirmation') is-invalid @enderror">
                                        @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mt20">
                                    <div class="col-md-12 text-center">

                                        <!-- Form Group -->
                                        @if(false)
                                            <div class="form-group">
                                                <input type="checkbox" id="agree2">
                                                <label for="agree2">Agree with the <a href="#">Terms and
                                                        Conditions</a></label>
                                            </div>
                                        @endif

                                        <!-- Form Group -->
                                        <div class="form-group nomargin">
                                            <input type="hidden" name="account_type" id="account_type" value="company">
                                            <button type="submit" class="btn btn-blue btn-effect">Hesab Yarat</button>
                                        </div>

                                    </div>
                                </div>
                            </form>


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
