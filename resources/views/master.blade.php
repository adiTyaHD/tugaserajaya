<!DOCTYPE html>
<html lang="en">

@include('templates.head')

<body id="page-top">
        <!-- Content -->
        @yield('content')
        <!-- Content END-->
        <!-- Footer -->
        @include('templates.footer')
        <!-- Footer END -->
    </div>
    </div>
    </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- JAVASCRIPT FILES -->
    @include('templates.scripts')
    @yield('pageScript')

</body>

</html>
