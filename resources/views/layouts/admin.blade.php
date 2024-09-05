@include('layouts.admin.header')

@include('layouts.admin.components.navbar')

@include('layouts.admin.components.sidebar')

    <div class="vertical-overlay"></div>


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
                <!-- end page title -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        {{ date('Y') }} © JobNest.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by OrkhaN
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@include('layouts.admin.footer')
