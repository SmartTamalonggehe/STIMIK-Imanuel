<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('admin.layouts.head')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('admin.layouts.nav')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('admin.layouts.main_menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="float-start mb-0">@yield('halaman')</h2>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('admin.layouts.footer')
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    <script>
        let route = document.getElementById('route');
        if (route) {
            route = route.textContent
        }
        const role = 'admin';
    </script>
    @include('admin.layouts.scripts')
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>
