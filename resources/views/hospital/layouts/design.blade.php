<!DOCTYPE html>
<html lang="en">

@include('hospital.layouts.head_css')
@yield('extra_css')
<body>
    <!-- Start Header -->
    @include('hospital.layouts.header')
    <!-- End Header -->
    @yield('content')
    @include('hospital.layouts.footer')
    <!-- **********Included Scripts*********** -->
    <!-- Jquery Library 2.1 JavaScript-->
    
    @include('hospital.layouts.script')
</body>
	@yield('extra_script')
</html>
