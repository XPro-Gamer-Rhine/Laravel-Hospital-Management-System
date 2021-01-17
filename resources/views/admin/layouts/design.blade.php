<!doctype html>
<html lang="en" dir="ltr">

@include('admin.layouts.header')
@yield('inline_css')
<body class="">
    <div id="global-loader"></div>
    <div class="page">
        <div class="page-main">
            @include('admin.layouts.navbar')
            <div class="wrapper">
                <!-- Sidebar Holder -->
                @include('admin.layouts.sidebar')
                <div class=" content-area">
                    @yield('content')
                </div>
            </div>
        </div>
        <!--footer-->
        @include('admin.layouts.footer')
        <!-- End Footer-->
    </div>
    <!-- Back to top -->
    <a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
    <!-- Dashboard Core -->
    @include('admin.layouts.script')
    @yield('inline_script')
</body>

</html>
