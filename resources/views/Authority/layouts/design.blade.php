<!doctype html>
<html lang="en" dir="ltr">

@include('Authority.layouts.header')
@yield('inline_css')
<body class="">
    <div id="global-loader"></div>
    <div class="page">
        <div class="page-main">
            @include('Authority.layouts.navbar')
            <div class="wrapper">
                <!-- Sidebar Holder -->
                @include('Authority.layouts.sidebar')
                <div class=" content-area">
                    @yield('content')
                </div>
            </div>
        </div>
        <!--footer-->
        @include('Authority.layouts.footer')
        <!-- End Footer-->
    </div>
    <!-- Back to top -->
    <a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
    <!-- Dashboard Core -->
    @include('Authority.layouts.script')
    @yield('inline_script')
</body>

</html>
