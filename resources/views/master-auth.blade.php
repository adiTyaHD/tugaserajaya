<!DOCTYPE html>
<html lang="en">

@include('templates.head')

<body class="bg-gradient-primary">
    <!-- Content -->
    @yield('content')
    <!-- Content END-->
    <!-- JAVASCRIPT FILES -->
    @include('templates.scripts')
    @yield('pageScript')

</body>

</html>
